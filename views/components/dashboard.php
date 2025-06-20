<div class="container py-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Bienvenido al Dashboard</h1>
                    <p class="card-text">Has iniciado sesión como: <?php echo htmlspecialchars($user['email']); ?></p>
                    <p class="card-text">Rol: <?php echo htmlspecialchars($user['role']); ?></p>
                   
                    <form action="logout.php" method="POST" class="mt-4">
                        <button type="submit" class="btn btn-danger">
                            <i class="bi bi-box-arrow-right me-2"></i>
                            Cerrar Sesión
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>