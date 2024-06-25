@extends('pages.template')

@section('custom-css')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
@endsection('custom-css')



@if(session()->has("user"))
{{ session()->get("user") }}
@endif
@if(Auth::check())
Logat ca si {{ Auth::id() }}
@else
nelogat
@endif





@section('content')
<h2>Mesaje</h2>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>

<script>
    new DataTable('#mesaje');

    $(document).ready(function() {
        $("#mesaje").DataTable({
            stateSave: false, //aici era true
            stateSaveCallback: function(settings, data) {
                localStorage.setItem('DataTables_' + settings.sInstance, JSON.stringify(data))
            },
            stateLoadCallback: function(settings) {
                return JSON.parse(localStorage.getItem('DataTables_' + settings.sInstance))
            },
            "lengthMenu": [10, 15, 50],
            order: [
                [3, 'desc']
            ], // Sortează după coloana 'Postat' în ordine descendentă
            drawCallback: function() {
                $(this).find('.sorting:after').html('<i class="fas fa-sort"></i>');
                $(this).find('.sorting_asc:after').html('<i class="fas fa-sort-up"></i>');
                $(this).find('.sorting_desc:after').html('<i class="fas fa-sort-down"></i>');
            }
        });
    });
</script>

<table id="mesaje" style="width:100%" class="table table-bordered table-striped table-hover">
    <thead>
        <th>Destinatar</th>
        <th>Ora</th>
        <th>Data</th>
        <th>Postat</th>
        <th>Status</th>
        <th>Arhiveaza</th>
        <th>Mesaj</th>
    </thead>
    <tbody>

        @foreach($mesaje as $msg)
        <tr>
            <td>
                {{ optional($msg->destinatarUser)->username ?? 'User no longer exist' }} <br>
            </td>
            <td>{{$msg->ora}}</td>
            <td>{{$msg->data}}</td>
            <td>{{$msg->data_postarii}}</td>
            <td> {{$msg->approval}}</td>
            <td>arhiveaza</td>
            <td>{{$msg->mesaj}}</td>
        </tr>
        @endforeach
</table>
@section('scripts')

@endsection('scripts')
@endsection