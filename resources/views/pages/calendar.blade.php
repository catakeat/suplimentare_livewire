@extends('pages.template')
@section('content')

            <div class="form-group"  id='calendarul'>

<?php
                echo $calendar->show();
                ?>

</div>
        

@endsection