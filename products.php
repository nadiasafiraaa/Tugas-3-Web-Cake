<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Nadhiest Cake</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
    <header class="bg-white shadow">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <!-- Logo or Title -->
            <h1 class="text-2xl font-bold text-gray-800">Nadhiest Cake - Products</h1>

            <!-- Navigation -->
            <nav>
            <a href="index.php" class="text-lg font-bold text-black hover:text-gray-700">Home</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-6 py-8">
        <h2 class="text-3xl font-bold mb-6">Our Products</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php
            include 'db.php';

            $query = "SELECT * FROM products";
            $result = $conn->query($query);

            while ($row = $result->fetch_assoc()) :
            ?>
                <div class="bg-white rounded-lg shadow-md p-4">
                    <img src="uploads/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" class="w-full h-62 object-cover rounded-t-lg">
                    <div class="mt-4 text-center">
                        <h3 class="text-xl font-bold text-gray-800"><?php echo $row['name']; ?></h3>
                        <div class="flex justify-center items-center mt-2 text-gray-600">
                            <span class="text-lg font-semibold">Rp <?php echo number_format($row['price'], 0, ',', '.'); ?></span>
                            <a href="order.php?id=<?php echo $row['id']; ?>" class="ml-3 text-blue-500 hover:text-blue-700">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </div>
                        <button class="mt-4 bg-blue-500 text-white py-2 px-6 rounded hover:bg-blue-600">
                            Order Now
                        </button>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </main>

    <footer class="mt-8 bg-white shadow py-4">
        <div class="container mx-auto text-center text-gray-600">
            &copy; 2024 Nadhiest Cake. All rights reserved.
        </div>
    </footer>
</body>
</html>
