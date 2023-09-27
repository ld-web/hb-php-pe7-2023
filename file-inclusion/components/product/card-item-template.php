<div class="border-[1px] px-4 py-3 shadow-lg">
  <h3 class="m-0">
    <?php echo $product['name']; ?>
  </h3>
  <p class="m-0">
    <?php echo $product['price']; ?>€
  </p>
  <?php if ($product['discount']) { ?>
    <div>
      <span class="text-sm bg-green-500 text-white px-3 py-1">
        PROMO
      </span>
    </div>
  <?php } ?>
</div>