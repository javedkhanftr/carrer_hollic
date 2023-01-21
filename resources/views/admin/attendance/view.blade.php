@extends('layouts.app')
@section('content')



<form method="post" action="{{ route('attendance.view') }}">
    @csrf
    <input type="text" name="search" value="{{$search}}" placeholder="Enter First Name">
    <input type="submit" name="submit">
</form>

<!-- <input id="myInput" type="text" placeholder="Search.."> -->



<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>S.no</th>
                <th>Name</th>
                <th>Date</th>
                <th>Checkin Date</th>
                <th>Checkout Date</th>
                <th>Minute</th>
                <th>Status</th>

            </tr>
        </thead>
        <tbody id="myTable">
            @php
            $i=1;
            @endphp
            @foreach($attendance as $key=> $att)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $att->full_name }}</td>
                <td>{{ date('j F, Y', strtotime($att->date)) }}</td>
                <td>
                    @if(!empty($att->checkout))

                    {{ $att->checkin }}
                    @else
                    <span class="text-danger">Null<span>
                            @endif

                </td>
                <td>

                    @if(!empty($att->checkout))

                    {{ $att->checkout }}
                    @else
                    <span class="text-danger">Null<span>
                            @endif

                </td>
                <td>
                    @if(!empty($att->checkout))

                    {{ $att->minute }}
                    @else
                    <span class="text-danger">Null<span>
                            @endif
                </td>
                <td>

                    @if(!empty($att->checkin) == "0000-00-00 00:00:00")
                    <span class="badge btn btn-success">present</span>
                    @else
                    <span class="badge btn btn-danger">Absent</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col-md-10"></div>
        <div class="col-md-2">
            <div class="text-right">
                {{ $attendance->links() }}
            </div>
        </div>
    </div>

</div>





@endsection
<script src="{{asset('https://code.jquery.com/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js')}}"></script>
<link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css')}}" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>