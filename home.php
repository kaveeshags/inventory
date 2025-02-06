<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory and Accounting System</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f9f9f9;">
  <!-- Header -->
  <header style="background-color: #8B0000; color: white; padding: 20px; text-align: center;">
    <h1 style="margin: 0; font-size: 2.5rem;">Inventory and Accounting System</h1>
  </header>

  <!-- Main Container -->
  <div style="max-width: 1200px; margin: 20px auto; padding: 20px; background-color: white; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <!-- Add New Item Form -->
    <section style="margin-bottom: 40px;">
      <h2 style="color: #8B0000; border-bottom: 2px solid #8B0000; padding-bottom: 5px;">Add New Item</h2>
      <form>
        <div style="display: flex; flex-wrap: wrap; gap: 20px;">
          <!-- Item Name -->
          <div style="flex: 1;">
            <label for="item-name" style="display: block; margin-bottom: 5px; color: #333; font-weight: bold;">Item Name</label>
            <input type="text" id="item-name" name="item-name" placeholder="Enter item name" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
          </div>
          <!-- Quantity -->
          <div style="flex: 1;">
            <label for="quantity" style="display: block; margin-bottom: 5px; color: #333; font-weight: bold;">Quantity</label>
            <input type="number" id="quantity" name="quantity" placeholder="Enter quantity" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
          </div>
          <!-- Price -->
          <div style="flex: 1;">
            <label for="price" style="display: block; margin-bottom: 5px; color: #333; font-weight: bold;">Price (per unit)</label>
            <input type="number" id="price" name="price" placeholder="Enter price" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
          </div>
        </div>
        <!-- Add Item Button -->
        <button type="submit" style="background-color: #8B0000; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-size: 16px; cursor: pointer; margin-top: 20px;">Add Item</button>
      </form>
    </section>

    <!-- Inventory Table -->
    <section>
      <h2 style="color: #8B0000; border-bottom: 2px solid #8B0000; padding-bottom: 5px;">Inventory</h2>
      <table style="width: 100%; border-collapse: collapse;">
        <thead>
          <tr style="background-color: #8B0000; color: white;">
            <th style="padding: 10px; text-align: left;">Item Name</th>
            <th style="padding: 10px; text-align: left;">Quantity</th>
            <th style="padding: 10px; text-align: left;">Price (per unit)</th>
            <th style="padding: 10px; text-align: left;">Total Value</th>
            <th style="padding: 10px; text-align: left;">Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Sample Data Row 1 -->
          <tr style="border-bottom: 1px solid #ddd;">
            <td style="padding: 10px;">Laptop</td>
            <td style="padding: 10px;">10</td>
            <td style="padding: 10px;">$800.00</td>
            <td style="padding: 10px;">$8,000.00</td>
            <td style="padding: 10px;">
              <button style="background-color: #ffcc00; color: #333; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer; margin-right: 5px;">Edit</button>
              <button style="background-color: #ff4444; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">Delete</button>
            </td>
          </tr>
          <!-- Sample Data Row 2 -->
          <tr style="border-bottom: 1px solid #ddd;">
            <td style="padding: 10px;">Smartphone</td>
            <td style="padding: 10px;">25</td>
            <td style="padding: 10px;">$500.00</td>
            <td style="padding: 10px;">$12,500.00</td>
            <td style="padding: 10px;">
              <button style="background-color: #ffcc00; color: #333; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer; margin-right: 5px;">Edit</button>
              <button style="background-color: #ff4444; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </section>

    <!-- Accounting Summary -->
    <section style="margin-top: 40px;">
      <h2 style="color: #8B0000; border-bottom: 2px solid #8B0000; padding-bottom: 5px;">Accounting Summary</h2>
      <div style="display: flex; justify-content: space-between; margin-top: 20px;">
        <div style="background-color: #f0f0f0; padding: 20px; border-radius: 5px; flex: 1; margin-right: 10px;">
          <h3 style="margin: 0; color: #333;">Total Inventory Value</h3>
          <p style="margin: 5px 0; font-size: 1.5rem; color: #8B0000; font-weight: bold;">$20,500.00</p>
        </div>
        <div style="background-color: #f0f0f0; padding: 20px; border-radius: 5px; flex: 1; margin-left: 10px;">
          <h3 style="margin: 0; color: #333;">Total Items</h3>
          <p style="margin: 5px 0; font-size: 1.5rem; color: #8B0000; font-weight: bold;">35</p>
        </div>
      </div>
    </section>
  </div>

  <!-- Footer -->
  <footer style="background-color: #333; color: white; text-align: center; padding: 10px;">
    <p style="margin: 0;">&copy; 2023 Inventory and Accounting System. All rights reserved.</p>
  </footer>
</body>
</html>