<div class="pagination flex space-x-2">
  <?php
    if (!empty($page)) {
      echo str_replace(
        ['<a ', '<strong>', '</strong>'],
        [
          // link button design
          '<a class="inline-block px-3 py-1 bg-white border border-green-700 text-green-800 rounded-lg hover:bg-green-100 transition"',
          // current page design
          '<span class="inline-block px-3 py-1 bg-green-900 text-green-100 font-bold rounded-lg shadow">',
          '</span>'
        ],
        $page
      );
    }
  ?>
</div>
