<template>
	
	<div>

		<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
				
			<router-link  class="navbar-brand" :to="{ name: 'home' }">LaravelBnb</router-link>


			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					
					 <li class="nav-item">
					    <router-link class="nav-link" :to="{ name: 'home' }">Home</router-link>
					 </li>
					 
				</ul>

			</div>
		</nav>

		<div class="container mt-4 ny-4 pr-4 pl-4">
			<router-view></router-view>
		</div>
		
		
	</div>



</template>