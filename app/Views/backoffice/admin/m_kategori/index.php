<?= $this->extend('backoffice/partials_/main')?>
<?= $this->section('bc')?>
<div class="row align-items-center">
    <div class="col-sm-6">
        <h4 class="page-title">Kategori</h4>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-right">
            <li class="breadcrumb-item"><a href="javascript:void(0);"></a>Master Data</li>
            <li class="breadcrumb-item active">Kategori</li>
        </ol>
    </div>
</div>
<?= $this->endSection('bc')?>

<?= $this->section('konten')?>
<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">Default Datatable</h4>
                <br>
                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                         
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
<?= $this->endSection('konten')?>