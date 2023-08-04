@if($searchResults->count() > 0)
    <div class="table" >
        
        <div class="table-row header">
            <div class="table-cell">ID</div>
            <div class="table-cell">From</div>
            <div class="table-cell">To</div>
            <div class="table-cell">Seat</div>
            <div class="table-cell">Date</div>
            <div class="table-cell">Price</div>
            <div class="table-cell">Author ID</div>
            <div class="table-cell">Author Name</div>
            <div class="table-cell table-cell-wider">Created At</div>
            <div class="table-cell table-cell-wider">Updated At</div>
            <div class="table-cell">Amount</div> <!-- New column for the drop-down box -->
            <div class="table-cell">Action</div> <!-- New column for the "Book" button -->
        </div>
        
        @foreach($searchResults as $result)
            <div class="table-row">
                <div class="table-cell">{{ $result->id }}</div>
                <div class="table-cell">{{ $result->b_comp_ticket_from }}</div>
                <div class="table-cell">{{ $result->b_comp_ticket_to }}</div>
                <div class="table-cell">{{ $result->b_comp_ticket_seat }}</div>
                <div class="table-cell">{{ $result->b_comp_ticket_date }}</div>
                <div class="table-cell">{{ $result->b_comp_ticket_price }}</div>
                <div class="table-cell">{{ $result->b_comp_ticket_author_id }}</div>
                <div class="table-cell">{{ $result->b_comp_ticket_author_name }}</div>
                <div class="table-cell table-cell-wider">{{ $result->created_at }}</div>
                <div class="table-cell table-cell-wider">{{ $result->updated_at }}</div>
                <div class="table-cell table-cell-wider">
                    <select id="bookingOption{{ $result->id }}" class="booking-option" data-ticket-id="{{ $result->id }}">
                        <option value="">amount</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="table-cell">
                    <button onclick="bookTicket({{ $result->id }}, document.getElementById('bookingOption{{ $result->id }}').value)" disabled class="book-button" id="bookButton{{ $result->id }}">Book</button>
                </div>
            </div>
        @endforeach
    </div>
@else
    <p>No results found.</p>
@endif

<script>
    // Function to handle booking a ticket
function bookTicket(ticketId, selectedOption) {
    selectedOption = parseInt(selectedOption); // Convert to integer
    axios.post('/bookticket', {
        ticket_id: ticketId,
        selected_option: selectedOption
    })
    .then(response => {
        alert(response.data.message);
        // Optionally, you can update the UI or refresh the search results here
    })
    .catch(error => {
        console.error(error);
        // Handle errors if needed
    });
}

    // Event listener for the "Book" button
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('book-button')) {
            const ticketId = event.target.getAttribute('data-ticket-id');
            const bookingOption = document.getElementById('bookingOption' + ticketId).value;

            if (bookingOption !== '') {
                bookTicket(ticketId, bookingOption);
            }
        }
    });

    // Event listener for the dropdown to enable/disable the "Book" button
    document.addEventListener('change', function(event) {
        if (event.target.classList.contains('booking-option')) {
            const ticketId = event.target.getAttribute('data-ticket-id');
            const bookButton = document.getElementById('bookButton' + ticketId);
            const bookingOption = event.target.value;

            if (bookingOption !== '') {
                bookButton.disabled = false;
            } else {
                bookButton.disabled = true;
            }
        }
    });
</script>