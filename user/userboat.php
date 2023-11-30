
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wander Lust - Island Ticketing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="agentnav/agent.css">
</head>
<body>
    <!-- Header -->
    

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
    <?php include('agentnav/nav.html'); ?> <!-- Include the navigation bar here -->
    </nav>

    <!-- Main Content -->
    <main style="background-color: #f0f8ff; border-bottom: 50px">
    <div class="container">
        <h4>Boat Types</h4>
      
        <div class="row">
          <div class="col-md-4">
            <div class="card ">
              <div class="card-body">
                <h5 class="card-title">San Pedro de Nonok</h5>
                <button class="btn btn-primary" data-toggle="modal" data-target="#sanpedrodenonokModal">View Details</button>
              </div>
            </div>
          </div>
      
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Speedboat</h5>
                <button class="btn btn-primary" data-toggle="modal" data-target="#lordwindsModal">View Details</button>
              </div>
            </div>
          </div>
      
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Canoe</h5>
                <button class="btn btn-primary" data-toggle="modal" data-target="#islandroseModal">View Details</button>
              </div>
            </div>
          </div>
        </div>
<br>
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Duran-Duran</h5>
                <button class="btn btn-primary" data-toggle="modal" data-target="#duranduranModal">View Details</button>
              </div>
            </div>
          </div>
      
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Kayak</h5>
                <button class="btn btn-primary" data-toggle="modal" data-target="#franklynModal">View Details</button>
              </div>
            </div>
          </div>
      
    
       <!-- sanpedrodenonok Modal -->
<div class="modal fade" id="sanpedrodenonokModal" tabindex="-1" role="dialog" aria-labelledby="sanpedrodenonokModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sanpedrodenonokModalLabel">San Pedro de Nonok Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php
                // Include your database connection code here
                include 'connection.php';

                // Perform a SELECT query to retrieve data for Sailboat
                $sql = "SELECT group_name FROM bookings WHERE boat = 'San Pedro de Nonok' LIMIT 1";
                $result = mysqli_query($conn, $sql);

                // Check if the query was successful
                if (!$result) {
                    die("Error: " . mysqli_error($conn));
                }

                // Check if there are rows returned
                if ($row = mysqli_fetch_assoc($result)) {
                    // Display San Pedro de Nonok details
                    echo '<p>Group Name: ' . $row['group_name'] . '</p>';
                    // Add more details as needed
                } else {
                    // No rows found
                    echo '<p>No details found for San Pedro de Nonok</p>';
                }

                // Close the database connection
                mysqli_close($conn);
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
      
        <!-- Speedboat Modal -->
        <div class="modal fade" id="speedboatModal" tabindex="-1" role="dialog" aria-labelledby="speedboatModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="sapeedboatModalLabel">Speedboat Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <?php
                // Include your database connection code here
                include 'connection.php';

                // Perform a SELECT query to retrieve data for Sailboat
                $sql = "SELECT group_name FROM bookings WHERE group_name = 'Group 20' LIMIT 1";
                $result = mysqli_query($conn, $sql);

                // Check if the query was successful
                if (!$result) {
                    die("Error: " . mysqli_error($conn));
                }

                // Display Speedboatboat details
                $row = mysqli_fetch_assoc($result);
                echo '<p>Group Name: ' . $row['group_name'] . '</p>';
                // Add more details as needed

                // Close the database connection
                mysqli_close($conn);
                ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        <!-- Speedboat modal content here -->
        </div>
      
        <!-- Canoe Modal -->
        <div class="modal fade" id="canoeModal" tabindex="-1" role="dialog" aria-labelledby="canoeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="canoeModalLabel">Canoe Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <?php
                // Include your database connection code here
                include 'connection.php';

                // Perform a SELECT query to retrieve data for Sailboat
                $sql = "SELECT group_name FROM bookings WHERE group_name = 'asd' LIMIT 1";
                $result = mysqli_query($conn, $sql);

                // Check if the query was successful
                if (!$result) {
                    die("Error: " . mysqli_error($conn));
                }

                // Display Canoeboatboat details
                $row = mysqli_fetch_assoc($result);
                echo '<p>Group Name: ' . $row['group_name'] . '</p>';
                // Add more details as needed

                // Close the database connection
                mysqli_close($conn);
                ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        <!-- Canoe modal content here -->
        </div>
      
        <!-- Duran-Duran Modal -->
        <div class="modal fade" id="duranduranModal" tabindex="-1" role="dialog" aria-labelledby="duranduranModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="duranduranModalLabel">Duran-Duran Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <?php
                // Include your database connection code here
                include 'connection.php';

                // Perform a SELECT query to retrieve data for Sailboat
                $sql = "SELECT group_name FROM bookings WHERE group_name = 'tdytd' LIMIT 1";
                $result = mysqli_query($conn, $sql);

                // Check if the query was successful
                if (!$result) {
                    die("Error: " . mysqli_error($conn));
                }

                // Display Duran-Duranboat details
                $row = mysqli_fetch_assoc($result);
                echo '<p>Group Name: ' . $row['group_name'] . '</p>';
                // Add more details as needed

                // Close the database connection
                mysqli_close($conn);
                ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        <!-- Duran-Duran modal content here -->
        </div>
        
      </div>
    </div>
    <!-- Kayak Modal -->
    <div class="modal fade" id="kayakModal" tabindex="-1" role="dialog" aria-labelledby="kayakModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="kayakModalLabel">Kayak Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <?php
                // Include your database connection code here
                include 'connection.php';

                // Perform a SELECT query to retrieve data for Sailboat
                $sql = "SELECT group_name FROM bookings WHERE group_name = 'Group 13' LIMIT 1";
                $result = mysqli_query($conn, $sql);

                // Check if the query was successful
                if (!$result) {
                    die("Error: " . mysqli_error($conn));
                }

                // Display Kayakboat details
                $row = mysqli_fetch_assoc($result);
                echo '<p>Group Name: ' . $row['group_name'] . '</p>';
                // Add more details as needed

                // Close the database connection
                mysqli_close($conn);
                ?>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        <!-- Canoe modal content here -->
        </div>
        
      </div>
    </div>
    </main>
    <!-- Footer -->
    <br>
    <br>
    
    <footer>
        <p>&copy; 2023 Wander Lust Ticketing System</p>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>

    <!-- Your Custom JavaScript -->
    <script src="agentjs/script.js"></script>
</body>
</html>
