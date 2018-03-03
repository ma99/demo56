@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                      {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <router-link to="/main" exact class="nav-link">
                              <span>Home</span>
                            </router-link>
                          </li>
                          <li class="nav-item">
                            <router-link to="/about" class="nav-link">
                              <span>About</span>
                            </router-link>
                          </li>
                          <li class="nav-item">
                            <router-link to="/contact" class="nav-link">
                              <span>Contact</span>
                            </router-link>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                          </li>
                        </ul>
                      </div>
                    </nav>
                </div>

                <div class="card-body">
                  <router-view></router-view>                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection