{extends file="layout.tpl"}

{block name="localstyle"}
  <style>
  </style>
{/block}

{block name="content"}

<h2>Order #{$order_id}</h2>
{if $session->login and $session->login->is_admin}
<pre>
User: {$user_name}
Email: {$user_email}
</pre>
    
    {/if}
<table class="table table-hover table-sm">
    <tr>
    <th>product name</th>
    <th>id</th>
    <th>category</th>
      <th>purchase price</th>
      <th>quantity</th>
      <th>subtotal</th>
      </tr>
         {foreach $order_info as $info}
          
      <tr>
        <td>{$info.name|escape:'html'}</td>
        <td>{$info.id}</td>
        
        <td>{$info.category}</td>
        <td class="price">${number_format($info.price,2)}</td>
        <td>{$info.quantity}</td>
        <td>${number_format($info.subtotal,2)}</td>
      </tr>
     
    {/foreach}
    
</table>
<pre>
<b>Total = ${number_format($total_price,2)}</b>
</pre>
{if $session->login and $session->login->is_admin}
    {if {session_get_flash var='confirm'}}
        <form action="deleteorder.php" method="GET">
            <input type="hidden" name="idhid" value={$order_id}  />
            <input type='hidden' name='confirm' value='confirm' />
            <button type="submit" >Process</button>
            <button type="submit" name="cancel">Cancel</button>
            <h4 class="message">{session_get_flash var='message'}</h4>
        </form>
        {else}
            <form action="deleteorder.php" method="GET">
            <input type="hidden" name="idhid" value={$order_id}  />
            <button type="submit" >Process</button>
            <h4 class="message">{session_get_flash var='message'}</h4>
        </form>
        {/if}
    {/if}

{/block}