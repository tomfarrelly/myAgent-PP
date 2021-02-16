@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <p id="alert-message" class="alert-collapse"></p>

            <div class="card">
                <div class="card-header">
                    DJ Roster

                </div>
                <div class="md-input-wrapper search-form">
                  <form method="GET" value="{{ csrf_token() }}" id="djs">
                      <input type="text" class="md-input label-fixed" name="str" id="str"  autofocus placeholder="Search By Genre"/>
                      <span class="md-input-bar"></span>

                  </form>
                </div>

                <div class="card-body">

                    <table id="table-djs" class="table table-hover">
                        <thead>
                            <th>Genre</th>
                            <th>Dj</th>

                        </thead>
                        <tbody>
                            @foreach ($genres as $genre)

                                <td>{{ $genre->name }}</td>

                                  @foreach ($genre->dj as $dj)
                                <td>{{ $dj->user->name }}</td>
                                  @endforeach
                                <td>

                                </td>
                            </tr>
                              @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
