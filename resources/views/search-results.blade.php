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
            </div>
        @endforeach
    </div>
@else
    <p>No results found.</p>
@endif
