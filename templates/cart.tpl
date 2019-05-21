{extends file="layout.tpl"}

{block name="localstyle"}
  <style>
  </style>
{/block}

{block name="content"}

<h2>My Cart</h2>
<table class="table table-hover table-sm">
    <tr>
    <th>name</th>
    <th>id</th>
    <th>category</th>
      <th>price</th>
      <th>quantity</th>
      <th>subtotal</th>
      </tr>
         {foreach $cart_info as $info}
          
      <tr>
        <td>
          <a href="showProduct.php?product_id={$info.id}">
            {$info.name|escape:'html'}
          </a>
        </td>
        <td>{$info.id}</td>
        
        <td>{$info.category}</td>
        <td class="price">${number_format($info.price,2)}</td>
        <td>{$info.quantity}</td>
        <td>${number_format($info.quantity * $info.price,2)}</td>
      </tr>
     
    {/foreach}
    
</table>



<pre>
<b>Total = ${number_format($total_price,2)}</b>
</pre>
{if $session->login and $cart_info}
    <form action="makeorder.php" method="post" autocomplete="off">
        <button type="submit">Make an Order from Cart</button>
    </form>
{/if}

{/block}
