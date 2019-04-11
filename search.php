<!-- Accueil -->

<div class="home">

	<!-- Background d'Accueil -->

			<!-- Image pour https://unsplash.com/@anikindimitry -->
	<div class="home_background" style="background-image:url(images/home_slider.jpg)"></div>

	<div class="home_background_text-center">
		<h1>découvrez</h1>
		<h1>le monde</h1>	
	</div>

		<!-- Recherches de voyages -->

		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">

					<!-- Bars Recherches -->

					<div class="search_tabs_container">
						<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/suitcase.png" alt=""><span>Packs</span></div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/diving.png" alt="">Par Catégories</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/promo.png" alt="">Promotions</div>
						</div>		
					</div>

					<!-- Bars Recherches 1 -->

					<div class="search_panel active">
						<form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>ville de destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>ville de départ</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>aller</div>
								<input type="text" class="check_in search_input" placeholder="JJ-MM-AAAA">
							</div>
							<div class="search_item">
								<div>retour</div>
								<input type="text" class="check_out search_input" placeholder="JJ/MM/AAAA">
							</div>
							<div class="search_item"> <!-- premiere bar de recheche -->
								<div>Adultes</div>
								<select name="adults" id="adults_1" class="dropdown_item_select search_input">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>									
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select>
							</div>
							<div class="search_item">
								<div>Enfants</div>
								<select name="children" id="children_1" class="dropdown_item_select search_input">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>									
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select>
							</div>
							<button class="button search_button">Recherche<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Bars Recherches 2 -->

					<div class="search_panel">
						<form action="#" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item"> <!-- deuxieme bar de rechecher -->
								<div>Adultes</div>
								<select name="adults" id="adults_2" class="dropdown_item_select search_input">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>									
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select>
							</div>
							<div class="search_item">
								<div>Enfants</div>
								<select name="children" id="children_2" class="dropdown_item_select search_input">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>									
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select>
							</div>
							<button class="button search_button">Recherche<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Bars Recherches 3 -->

					<div class="search_panel">
						<form action="#" id="search_form_3" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item"> <!-- troisieme bar de rechecher -->
								<div>Adultes</div>
								<select name="adults" id="adults_3" class="dropdown_item_select search_input">
									<option>00</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>									
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select>
							</div>
							<div class="search_item">
								<div>Enfants</div>
								<select name="children" id="children_3" class="dropdown_item_select search_input">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>									
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select>
							</div>
							<button class="button search_button">Recherche<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>		
	</div>
</div>