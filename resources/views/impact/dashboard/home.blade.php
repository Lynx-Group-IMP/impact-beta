@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-4">
         <!--<ul class="list-group">
            <li class="list-group-item"><a href="/newride" style="color: black;text-decoration: none;"><i class="fas fa-plus-circle" style="color: #e8253b;"></i> {{ __('Create a new ride') }}</a></li>
              <li class="list-group-item"><a href="/newride" style="color: black;text-decoration: none;"><i class="fas fa-map-marked-alt
            " style="color: #e8253b;"></i> {{ __('Create new map data') }} <span class="badge badge-secondary">New</span></a></li>
            <li class="list-group-item"><a href="/newride" style="color: black;text-decoration: none;"><i class="fas fa-map-marker-alt
            " style="color: #e8253b;"></i> {{ __('Map New Trail') }} <span class="badge badge-secondary">New</span></a></li>
            <li class="list-group-item"><a href="/account/events" style="color: black;text-decoration: none;"><i class="fas fa-calendar-alt" style="color: #e8253b;"></i> {{ __('Your Events') }}</a></li>
            <li class="list-group-item"><a href="/account/vehicles" style="color: black;text-decoration: none;"><i class="fas fa-motorcycle" style="color: #e8253b;"></i> {{ __('Your Vehicles') }}</a></li>
            <li class="list-group-item"><a href="/account/vehicles" style="color: black;text-decoration: none;"><i class="fas fa-cog" style="color: #e8253b;"></i> {{ __(' Account Settings') }} <span class="badge badge-secondary">New</span></a></li>
            
            </ul><br>-->
         <div class="card">
            <div class="card-body">
                  <center>
                  <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}&color=7F9CF5&background=EBF4FF" alt="userprofile" class="img-responsive rounded-circle" style="width:75px;height:75px;">
                     <br><br><h4 class="text-primary" style="margin-bottom:0px;padding-bottom:0px;">{{Auth::user()->name}}</h4>
                     <p style="margin-bottom:0px;padding-bottom:0px;color:dark-gray"><strong>Administrator</strong></p>
                     </center>
               <hr>
               <h4 style="font-size:18px;"><i class="fas fa-level-up-alt"></i> Level</h4>
               <p style="margin-bottom:5px;padding-bottom:0px;"><strong>1 | 3000/10000 OXP</strong></p>
               <div class="progress" style="    height: 5px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 15%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <br>
               <h4 style="font-size:18px;"><i class="fas fa-map-marker"></i> Distance</h4>
               <p style="margin-bottom:0px;padding-bottom:0px;"><strong>0km</strong></p>
               <br>
               <h4 style="font-size:18px;"><i class="fas fa-stopwatch"></i> Ride Time</h4>
               <p style="margin-bottom:0px;padding-bottom:0px;"><strong>0hrs</strong></p>
               <br>
               <h4 style="font-size:18px;"><i class="fas fa-map-marker-alt"></i> Favorite Trail</h4>
               <p style="margin-bottom:0px;padding-bottom:0px;"><strong>Malakoff Rd (Teal Trail)</strong></p>
               <br>
               <h4 style="font-size:18px;"><i class="fas fa-truck-monster"></i> Favorite Vehicle</h4>
               <p style="margin-bottom:0px;padding-bottom:0px;"><strong>Dirt Bike</strong></p>
               <br>
               <h4 style="font-size:18px;"><i class="fas fa-calendar-alt"></i> Upcoming Events</h4>
               <!--<strong>You have no events.</strong>-->
               <p style="margin-bottom:0px;padding-bottom:0px;"><strong>You have no upcoming events.</strong></p>
               <!--<p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-calendar-alt"></i> <strong>Time to be reckless.</strong></p>-->
            </div>
         </div>
         <br>
      </div>
      <div class="col-md-8">
         <div class="card">
            <div class="card-body">
               <center>
                  <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}&color=7F9CF5&background=EBF4FF" alt="userprofile" class="img-responsive rounded-circle" style="width:75px;height:75px;"/>
                  <h2 style="margin-top:5px;">Welcome, {{Auth::user()->name}}!</h2>
                  <button type="button" class="btn btn-sm btn-outline-primary">Create Ride</button>
            <button type="button" class="btn btn-sm btn-outline-primary">Your Team</button>
               <button type="button" class="btn btn-sm btn-outline-primary">Create Trail</button>
               </center>
            </div>
         </div>
         <br>
         <!--<h4 style="font-size:18px;margin-left: 2px;"><i class="fas fa-flag-checkered"></i> Motocross Training</h4>
         <div class="card">
            <div class="card-body">
               <p style="margin-bottom:0px;padding-bottom:0px;color: #e8253b;"><i class="fas fa-times"></i> <strong>You did not ride today.</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;color: #007bff;"><i class="fas fa-check"></i> <strong>You have met your sleep goal</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;color: #e8253b;"><i class="fas fa-times"></i> <strong>You have gained 0lb/60lb (0lb today)</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;color: #007bff;"><i class="fas fa-check"></i> <strong>You have worked out 1 hour today</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;color: #007bff;"><i class="fas fa-check"></i> <strong>You have learnt 1 new skill</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;color: #e8253b;"><i class="fas fa-times"></i> <strong>You are not fit for motocross</strong></p>
            </div>
         </div>
         <br>-->
         <div class="card">
            <div class="card-body">
               <center>
                  <h2 class="text-primary" style="margin-top:5px;"><i class="fas fa-calendar-alt" aria-hidden="true"></i></h2>
                  <p style="padding:0px;margin:0px;"><strong>Your Events</strong></p>
               </center>
            </div>
         </div>
         <br> 
         
         
         <!--<div class="card">
            <div class="card-body">
               <h4 class="text-primary" style="color: #e8253b;">Control The Power</h4>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-map-marker-alt"></i> <strong>Quebec, Q-C</strong></p>
               <hr>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-crown"></i> <strong>Team GodX</strong> </p>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-truck-monster"></i> <strong>Dirtbike Ride</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-calendar-alt"></i> <strong>October 11, 2020 at 4:30PM</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;" class="text-secondary"><i class="fas fa-exclamation-circle"></i> <strong>Event In Progress</strong></p>
              <hr><button type="button" class="btn btn-sm btn-success">Event In Progress</button>
                  <button type="button" class="btn btn-sm  btn-danger disabled">Not Going</button>
                  <button type="button" class="btn btn-sm  btn-danger disabled">Cancel Ride</button><br>-
               <p style="margin-bottom:0px;padding-bottom:0px;color: #e8253b;"><i class="fas fa-times"></i> <strong>This ride is not cancellable due to it being daily.</strong></p>
            </div>
         </div>
         <br>-->

         <center><strong>You have no active events or upcoming events.</strong><br><br></center>

         <!-- Impact History Livewire Component -->
         <livewire:history/>

         <div class="card">
            <div class="card-body">
               <center>
                  <h2 class="text-primary" style="margin-top:5px;"><i class="fas fa-motorcycle" aria-hidden="true"></i></h2>
                  <p style="padding:0px;margin:0px;"><strong>Motocross Training</strong></p>
               </center>
            </div>
         </div>
         <br> 
         
         <center><strong>You have not configured your motocross training.</strong><br><br></center>
      </div>
   </div>
</div>
@endsection