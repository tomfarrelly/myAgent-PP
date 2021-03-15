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

                  <form method="GET" id="djs">
            			<select name="genre_id" id="input">
            				<option value="0">Select Genre</option>
            				@foreach ($genres as $genre)
            					<option value="{{ $genre->id }}" {{ $genre->id == $selected_id['genre_id'] ? 'selected' : '' }}>
            					{{ $genre['name'] }}
            				    </option>
            				@endforeach
            			</select>
        	    		<input type="submit" class="btn btn-danger btn-sm" value="Search">
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
