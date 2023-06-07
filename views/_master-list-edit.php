<div class="container">
  <div class="page__header">
    <div class="group">
      <span class="group__title">Student Master List</span>
    </div>
    <span class="description">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet...</span>
  </div>
  <div class="content">
    <div class="content__row">
      <div class="actions">
        <div class="actions__btn">
          <button class="primary">
            <i class="fa-solid fa-file-import"></i>
            <span class="name">Import CSV</span>
          </button>
          <button class="secondary">
            <i class="fa-solid fa-file-export"></i>
            <span class="name">Export CSV</span>
          </button>
          <button class="secondary">
            <i class="fa-regular fa-square-plus"></i>
            <span class="name">Add Student</span>
          </button>
        </div>
        <button class="filter">
          <span class="name">Status</span>
          <i class="fa-solid fa-angle-up"></i>
        </button>
        <form class="search">
          <div class="search__group">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search...">
          </div>
          <i class="fa-solid fa-xmark search__exit"></i>
        </form>
      </div>
      <table>
        <thead>
          <tr>
            <th class="col1">Name</th>
            <th class="col2">ID</th>
            <th class="col3">College</th>
            <th class="col4">Role</th>
            <th class="col5">Actions</th>
          </tr>
        </thead>
        <tbody>
          <form action="" method="">
            <?php for ($i = 0; $i < 10; $i++) { ?>
              <tr>
                <td class="col1">Name Placeholder</td>
                <td class="col2">CS101</td>
                <td class="col3">Bachelor of Science in Computer Science</td>
                <td class="col4">Not Enrolled</td>
                <td class="col5">
                  <button class="secondary">
                    <i class="fa-solid fa-pen-to-square"></i>
                  </button>
                  <button class="secondary">
                    <i class="fa-solid fa-pen-nib"></i>
                  </button>
                </td>
              </tr>
            <?php } ?>
          </form>
        </tbody>
      </table>
    </div>
  </div>
</div>