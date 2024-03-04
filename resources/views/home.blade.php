@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">You are logged in!</h1>

        <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">DB</th>
                <th scope="col">Domain (link)</th>
                <th scope="col">Date created</th>
                </tr>
            </thead>
            <tbody>

                <?php $i = 1; ?>
                @foreach($domains as $domain)
                <tr>
                    <th scope="row"> {{ $i++ }} </th>
                    <td> {{ $domain->tenant->id }} </td>
                    <td> {{ $domain->tenant->tenancy_db_name }} </td>
                    <td> <a href="http://{{ $domain->domain }}" target="_blank"> {{ $domain->domain }} </a> </td>
                    
                    <td> {{ $domain->created_at }} </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>

    </div>
@endsection
