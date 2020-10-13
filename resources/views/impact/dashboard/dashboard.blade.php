<div class="container py-4">
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-3">
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
                    @if(Auth::user()->avatar_url)
                    <div class="user-avatar" style="background-image: url('https://cdn.discordapp.com/avatars/{{$discord_connection->discord_id}}/{{$discord_connection->avatar}}.jpg');width:75px;height:75px;"></div>
                    @else
                    <div class="user-avatar" style="background-image: url('https://www.gravatar.com/avatar/{{ md5( strtolower( trim( Auth::user()->email ) ) )}}&s=100');width:75px;height:75px;"></div>
                    @endif <h4 class="text-primary" style="margin-top:15px;margin-bottom:0px;padding-bottom:0px;">{{Auth::user()->name}}</h4>
                     @if(Auth::user()->role == 'admin')
                     <p style="margin-bottom:0px;padding-bottom:0px;color:dark-gray"><strong>Administrator</strong></p>
                     @else
                     <p style="margin-bottom:0px;padding-bottom:0px;color:dark-gray"><strong>Member</strong></p>

                     @endif
                     <i class="fal fa-motorcycle" style="margin-right:5px;" data-toggle="tooltip" data-placement="top" title="Motocross Premium Membership">
                     </i><i class="fal fa-truck-monster" data-toggle="tooltip" data-placement="top" title="Offroading Premium Membership"></i>
                    </center>

               <!--<hr>
               <h4 style="font-size:18px;"><i class="fas fa-level-up-alt"></i> Level</h4>
               <p style="margin-bottom:5px;padding-bottom:0px;"><strong>1 | 3000/10000 OXP</strong></p>
               <div class="progress" style="    height: 5px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 15%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
               </div>z
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
               <strong>You have no events.</strong>
               <p style="margin-bottom:0px;padding-bottom:0px;"><strong>You have no upcoming events.</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-calendar-alt"></i> <strong>Time to be reckless.</strong></p>-->
            </div>
         </div>
         <br>
         <div class="list-group ">
            <button wire:click="setPage('home')" style="outline:none;" class="list-group-item list-group-item-action @if($active == 'home') active @endif" aria-current="true"><i class="far fa-home"></i> Dashboard</button>
            <button wire:click="setPage('events')" style="outline:none;" class="list-group-item list-group-item-action @if($active == 'events') active @endif"><i class="far fa-calendar-alt"></i> Events</button>
            <button wire:click="setPage('history')" style="outline:none;" class="list-group-item list-group-item-action @if($active == 'history') active @endif"><i class="far fa-motorcycle"></i>  Rides</button>
            <button wire:click="setPage('vehicles')" style="outline:none;" class="list-group-item list-group-item-action @if($active == 'vehicles') active @endif"><i class="far fa-truck-monster"></i>  Vehicles</button>
            <button wire:click="setPage('marketplace')" style="outline:none;" class="list-group-item list-group-item-action @if($active == 'marketplace') active @endif"><i class="far fa-shopping-cart"></i> Marketplace</button>
            <button wire:click="setPage('wiki')" style="outline:none;" class="list-group-item list-group-item-action @if($active == 'wiki') active @endif"><i class="far fa-info-circle"></i> Wiki</button>
            <button wire:click="setPage('network')" style="outline:none;" class="list-group-item list-group-item-action @if($active == 'network') active @endif"><i class="far fa-globe-americas"></i> Impact Network</button>
            <button wire:click="setPage('teams')" style="outline:none;" class="list-group-item list-group-item-action @if($active == 'teams') active @endif"><i class="far fa-flag-checkered"></i> Your Teams</button>
            <a href="/account/settings" class="list-group-item list-group-item-action"><i class="far fa-cog"></i> Account Settings</a>
            </div>
            <br>
      </div>
      <div class="col-md-8">
         <!-- Livewire Components -->

         @if($active == 'home')
         <livewire:dashboard.components.home/>
         @endif


         @if($active == 'events')
         <livewire:dashboard.components.events/>
         @endif

         @if($active == 'history')
         <livewire:dashboard.components.rides/>
         @endif

         @if($active == 'vehicles')
         <livewire:dashboard.components.vehicles/>
         @endif

         @if($active == 'chat')
         <livewire:errors.error5003/>
         @endif

         @if($active == 'network')
         <livewire:errors.error5002/>
         @endif

         @if($active == 'teams')
         <livewire:errors.error5002/>
         @endif

      </div>
   </div>
</div>
</div>
