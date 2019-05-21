{extends file="layout.tpl"}

{block name="localstyle"}
  <style type="text/css">
    table tr:first-child:hover {
      background: none;
    }
  </style>
{/block}

{block name="content"}  
 
  
  <h2>Products</h2>

  <form action="index.php" method="GET">
    <button type="submit">Choose category:</button>
    <select name="category_id">
      {html_options options=$categories selected=$category_id}
    </select>
  </form>
  <p></p>

  <table class="table table-hover table-sm">
    <tr>
      <th><a href="index.php?field=name">name</a></th>
      <th><a href="index.php?field=price">price</a></th>
      <th>category</th>
    </tr>
    {foreach $products as $product}
      <tr>
        <td>
          <a href="showProduct.php?product_id={$product->id}">
            {$product->name|escape:'html'}
          </a>
        </td>
        <td class="price">${number_format($product->price,2)}</td>
        <td>{$product->category->name}</td>
      </tr>
    {/foreach}
  </table>
    
{/block}
