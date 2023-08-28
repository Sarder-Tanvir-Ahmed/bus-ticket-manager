<?php
//mvc done
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use App\Models\bus_routes;

use Illuminate\Support\Facades\Auth;
// use App\Models\CustomerTicketStorage;
use App\Models\show_rating;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;


class ShowAllBusCompForRanking extends Controller
{
    public function show()
    {
        $userType = Auth::user()->role;

        if ($userType === 'Customer') {
            // $allBusComp = DB::select("SELECT * FROM `users` WHERE `role` LIKE 'Brand'");
            $allBusComp = User::getAllBusComp('Brand');
            return view('all_bus_comp_view_for_ranking', compact('allBusComp'));
        } else {
            return Redirect::back();
        }
    }


    public function select_rating(Request $req)
    {
        
        // dd($req -> all(),"doesit work?");
        
        $userType = Auth::user()->role;
        $company_id_to_show_rating = $req-> comp_id;
        // dd($req -> all(),$id);
        
        // $company_rating = show_rating::where('bus_comp_id', $company_id_to_show_rating)->get();
        $company_rating = show_rating::getRatingandReviewforAComapny($company_id_to_show_rating);
        // dd($req -> all(),$company_rating);
        if($userType=='Customer'){
            return view('bus_comp_rating',compact('company_rating','company_id_to_show_rating'));
        }
        else{
             
            return Redirect::back();
        }
    }



    public function give_rating(Request $req)
    {
        
        // dd($req -> all());
        $author_id = Auth::user()->id;
        $authod_name = Auth::user()->name;
        
        // $data->b_comp_ticket_author_id = $author_id;
        
        $company_id_to_show_rating = $req-> company_id_to_show_rating;

        // $user_info = User::where('id', $req->company_id_to_show_rating)->first();
        $user_info = User::getUserInfo($company_id_to_show_rating);
        $name = $user_info->name;

        $ratingData = [
            'bus_comp_id' => $company_id_to_show_rating,
            'customer_id' => $author_id,
            'review' => $req->review,
            'rating' => $req->rating,

            "company_name" => $name,
            "customer_name" => $authod_name,
        ];
        show_rating::create($ratingData);
        
        

        $company_rating = show_rating::getRatingandReviewforAComapny($company_id_to_show_rating);
        
        return view('bus_comp_rating',compact('company_rating','company_id_to_show_rating'));
        
        
    }

    public function showRatings()
    {
        // Fetch all ratings
        $ratings = show_rating::all();

        // Initialize an array to organize ratings by bus company
        $ratingsByCompany = [];

        // Organize ratings by bus company
        foreach ($ratings as $rating) {
            $busCompanyId = $rating->bus_comp_id;

            if (!isset($ratingsByCompany[$busCompanyId])) {
                $ratingsByCompany[$busCompanyId] = [
                    'company_name' => $rating->company_name,
                    'ratings' => [0, 0, 0, 0, 0], // Initialize an array to store counts for each rating (1-5)
                ];
            }

            // Increment the corresponding rating count
            $ratingsByCompany[$busCompanyId]['ratings'][$rating->rating - 1]++;
        }

        // Pass the $ratingsByCompany data to the welcome view
        return view('welcome', compact('ratingsByCompany'));
    }
}
