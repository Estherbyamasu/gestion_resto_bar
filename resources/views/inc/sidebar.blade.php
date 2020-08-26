<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<ul class="nav menu">
	<li class="active"><a href="{{ url('')}}"><em class="fa fa-dashboard">&nbsp;</em> Accueille</a></li>
	<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-cog">&nbsp;</em> Liste menu<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="{{ url('utilisateurs')}}">
						<span class="fa fa-user">&nbsp;</span>Utilisateurs
					</a></li>
					<li><a class="" href="{{ url('clients')}}">
						<span class="fa fa-users">&nbsp;</span> clients
					</a></li>
					<li><a class="" href="{{ url('serveurs')}}">
						<span class="fa fa-clone">&nbsp;</span> Serveurs
					</a></li>
					<li><a class="" href="{{ url('achats')}}">
						<span class="fa fa-list-alt">&nbsp;</span> Achats
					</a></li>
					<li><a class="" href="{{ url('fournisseurs')}}">
						<span class="fa fa-users">&nbsp;</span> Fournisseurs
					</a></li>
					<li><a class="" href="{{ url('categories')}}">
						<span class="fa fa-list-alt">&nbsp;</span> Categories
					</a></li>
					<li><a class="" href="{{ url('products')}}">
						<span class="fa fa-list-alt">&nbsp;</span> Products
					</a></li>
				
				<li><a class="" href="{{ url('detailleachats')}}">
						<span class="fa fa-bar-chart">&nbsp;</span> Detailleachats
					</a></li>
					<li><a class="" href="{{ url('factures')}}">
						<span class="fa fa-bell">&nbsp;</span> Factures
					</a></li>
					<li><a class="" href="{{ url('detaillefactures')}}">
						<span class="fa fa-bar-chart">&nbsp;</span> Detaillefactures
					</a></li>
			</li>
		</ul>
		
	

		<li><a href="users"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
	</ul>
</div>