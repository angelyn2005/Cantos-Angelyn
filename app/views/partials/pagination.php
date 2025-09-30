<div class="pagination inline-flex space-x-2 items-center mt-4">
  <?php
    if (!empty($page)) {
      echo str_replace(
        ['<a ', '<strong>', '</strong>'],
        [
          '<a class="inline-block px-3 py-1 bg-white border border-green-400 rounded-lg text-green-700 hover:bg-green-100 transition"',
          '<span class="inline-block px-3 py-1 bg-green-600 text-white font-bold border border-green-700 rounded-lg">',
          '</span>'
        ],
        $page
      );
    }
  ?>
</div>
