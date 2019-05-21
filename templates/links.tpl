
{if $session->login and $session->login->is_admin}
<li class="nav-link"><a href="allorders.php">All Orders</a></li>
<li class="nav-link"><a href="addproduct.php">Add Product</a></li>
<li class="nav-link"><a href="addcategory.php">Add Category</a></li>
{else if $session->login}
<li class="nav-link"><a href="cart.php">Cart</a></li>
<li class="nav-link"><a href="myorders.php">My Orders</a></li>
{/if}
{if $session->login}
  <li class="nav-link"><a href="logout.php">Logout</a></li>
{else}
<li class="nav-link"><a href="cart.php">Cart</a></li>
  <li class="nav-link"><a href="login.php">Login</a></li>
{/if}
