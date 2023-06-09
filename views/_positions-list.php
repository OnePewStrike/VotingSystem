<div class="container">
  <?php include('views/components/messages.php') ?>
  <div class="page__header">
    <div class="group">
      <span class="group__title">Positions List</span>
    </div>
    <span class="description">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet...</span>
  </div>
  <div class="content">
    <div class="content__row">
      <div class="actions">
        <div class="actions__btn">
          <a href="positions-list-create.php">
            <button class="primary">
              <i class="fa-regular fa-square-plus"></i>
              <span class="name">Add Position</span>
            </button>
          </a>
        </div>
        <form class="search">
          <div class="search__group">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search...">
          </div>
          <i class="fa-solid fa-xmark search__exit"></i>
        </form>
      </div>
      <table class="position">
        <thead>
          <tr>
            <th class="col1">Position Name</th>
            <th class="col2">ID</th>
            <th class="col3">Description</th>
            <th class="col4">Colleges</th>
            <th class="col5">Number of Candidates to be Elected</th>
            <th class="col6">Actions</th>
          </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < 10; $i++) { ?>
              <tr>
                <td class="col1">Name Placeholder</td>
                <td class="col2">PP101</td>
                <td class="col3">This position is for...</td>
                <td class="col4">All Colleges</td>
                <td class="col5">1</td>
                <td class="col6">
                  <a href="positions-list-edit.php">
                    <button class="secondary">
                      <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                  </a>
                </td>
              </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="pagination">
    <a href="#" class="group">
      <i class="fa-solid fa-angle-left"></i>
      <span class="name">PREVIOUS</span>
    </a>
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <span class="ellipsis">...</span>
    <a href="#">101</a>
    <a href="#" class="group">
      <span class="name">NEXT</span>
      <i class="fa-solid fa-angle-right"></i>
    </a>
  </div>
</div>