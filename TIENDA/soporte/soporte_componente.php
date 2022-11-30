<nav class="mb-4">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fa-solid fa-house-user"></i> Inicio</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fa-solid fa-ticket"></i> Abrir ticket</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="fa-solid fa-ticket-simple"></i> Trazabilidad Tickets</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="fa-solid fa-map-location-dot"></i> Trazabilidad Pedido</button>
  </div>
</nav>
<div class="tab-content text-center" id="nav-tabContent">
    <?php include 'inicio.php'; ?>
    <?php include 'apertura_ticket.php'; ?>
    <?php include 'trazabilidad_tikects.php'; ?>
    <?php include 'trazabilidad.php'; ?>
</div>
 