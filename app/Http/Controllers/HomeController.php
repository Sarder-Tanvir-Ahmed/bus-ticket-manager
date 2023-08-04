<?php

namespace App\Http\Controllers;
use App\Models\Brand_Ticket_Published;
use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function customersearch(Request $request)

    {
        
        $query = $request->input('query');

        $searchResults = Brand_Ticket_Published::where('b_comp_ticket_from', 'LIKE', '%' . $query . '%')
            ->orWhere('b_comp_ticket_to', 'LIKE', '%' . $query . '%')
            ->get();
    
            
        return view('customer-results', compact('searchResults'));
    }

    public function bookTicket(Request $request)
    {
        $ticketId = $request->input('ticket_id');
        $selectedOption = $request->input('selected_option');

        // Get the ticket data from the database
        $ticket = Brand_Ticket_Published::find($ticketId);

        if (!$ticket) {
            return response()->json(['error' => 'Ticket not found'], 404);
        }

        // Update the b_comp_ticket_seat by subtracting the selected option value
        $ticket->b_comp_ticket_seat -= $selectedOption;
        $ticket->save();

        // Add data to the notifications table
        Notification::create([
            'id' =>  Auth::user()->id,
            'ticket(s)' =>  $selectedOption,
            'from' => $ticket->b_comp_ticket_from,
            'to' => $ticket->b_comp_ticket_to,
            'author_name' => $ticket->b_comp_ticket_author_name,
            'date' => $ticket->b_comp_ticket_date,
        ]);

        

        return response()->json(['message' => 'Booking successful']);
    }

    
}
