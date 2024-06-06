<div>
    @section('content')
    <h2>Mesaje</h2>
    <pre>@this.page</pre>
    <br>

    <pre>@entangle('events')</pre>

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
            <tr wire:key="{{$msg->id}}">
                <td>
                    {{ optional($msg->destinatarUser)->username ?? 'User no longer exist' }} <br>
                </td>
                <td>{{$msg->ora}}</td>
                <td>{{$msg->data}}</td>
                <td>{{$msg->data_postarii}}</td>
                <td> {{$msg->approval}}</td>
                <td> arhiveaza</td>
                <td>{{$msg->mesaj}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{  $mesaje->links()  }}
    @endsection
</div>