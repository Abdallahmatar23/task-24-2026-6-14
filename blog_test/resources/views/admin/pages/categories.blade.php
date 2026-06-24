<?php
//  showSuccessMessage();
// $Categories = $Categories ?? [] ;
?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Categories</h1>

        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="">Home</a>
                </li>
                <li class="breadcrumb-item active">Categories</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">

                        <!-- Header -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h3 class="mb-0">Categories List</h3>

                            <a href="" class="btn btn-success">
                                <i class="bi bi-plus-circle me-1"></i>
                                Add Product
                            </a>
                        </div>

                        <!-- Table -->
                        <table class="table table-hover table-striped align-middle datatable">
                            <thead class="table-light">
                                <tr>
                                    <th>#ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach($Categories as $product)

                                <tr>
                                    <td></td>

                                    <td></td>

                                    <td></td>


                                    <td><td>

                                        <div class="btn-group">

                                            <a href=""
                                                class="btn btn-primary btn-sm">
                                                Edit
                                            </a>

                                            <form method="POST"
                                                action=""
                                                onsubmit="return confirm('Are you sure you want to delete this product?')">

                                                <input type="hidden" name="id" value="">

                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    Delete
                                                </button>

                                            </form>

                                        </div>

                                    </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
