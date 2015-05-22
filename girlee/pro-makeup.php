<?php include_once 'header.php'; ?>

<div class="container">
	<div class="col-md-5 p-0">
		<div class="prod-content">
			<h1 class="prod-title">10 Piece Compact</h1>
			<div class="price">Price: <span>$22</span></div>
			<div class="prod-desc">
				<p class="review">Quick Review</p>
				<p>Perfect 10 piece palette for the ultimate professional, just choose your favourite eye colours or brow &amp; highlighters. And start creating!  SUPER LIMITED TIME SPECIAL PRICE!</p>

				<p>To select your products &amp; colours please CLICK COLOUR to make your selection. Once you have finalised your selection you will be able to add the product to the cart.</p>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="girlee-thumbnail">
            <div class="row girlee-first-img">
                <div id="myCarousel" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="active item" data-slide-number="0">
                            <img src="images/prod-2.jpg">
                        </div>
                        <div class="item" data-slide-number="1">
                            <img src="images/prod-2.jpg">
                        </div>
                         <div class="item" data-slide-number="1">
                            <img src="images/prod-2.jpg">
                        </div>
                    </div>
                </div>      
            </div>
	        <div class="girlee-carousel" id="slider-thumbs">
	            <ul>
	              <li>
	                <a id="carousel-selector-1">
	                  <img src="images/prod-3.jpg">
	                </a>
	              </li>
	              <li>
	                <a id="carousel-selector-2">
	                  <img src="images/prod-3.jpg">
	                </a>
	              </li>
	              <li>
	                <a id="carousel-selector-2">
	                  <img src="images/prod-3.jpg">
	                </a>
	              </li>
	            </ul>
	        </div>
        </div>
	</div>
	<div class="col-md-3 p-0">
		<div class="color-palette">
			<p class="review">Color Palette</p>
		</div>
		<ul class="palette">
            <li><img src="images/prod-4.jpg"><p>Dark</p></li>
            <li><img src="images/prod-4.jpg"><p>Dark</p></li>
            <li><img src="images/prod-4.jpg"><p>Dark</p></li>
            <li><img src="images/prod-4.jpg"><p>Dark</p></li>
        </ul>

		<div class="qty">
			<form class="form-inline">
			  <div class="form-group">
			    <label class="qty-label" for="qty">Qty</label>
			    <input class="qty-input" id="qty-number" type="text" value="0" name="qty-number">
			  </div>
			  <button type="submit" class="btn btn-default add-cart"><i class="fa fa-cart-plus"></i>Add to Cart</button>
			</form>
			<a class="single-wishlist wishlist-color" href="#">Add to Wishlist<i class="fa fa-heart-o"></i></a>
		</div>
	</div>
</div>

<?php include_once 'footer.php'; ?>