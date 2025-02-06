<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Master File Management</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f5f5f5;">
  <!-- Header -->
  <header style="background-color: #8B0000; color: white; padding: 20px; text-align: center;">
    <h1 style="margin: 0; font-size: 2.2rem;">Master File Management</h1>
  </header>

  <!-- Main Container -->
  <div style="max-width: 1200px; margin: 20px auto; padding: 20px; background-color: white; border-radius: 10px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">

    <!-- Suppliers Section -->
    <section style="margin-bottom: 40px; border: 1px solid #ddd; padding: 20px; border-radius: 8px;">
      <h2 style="color: #8B0000; border-bottom: 2px solid #8B0000; padding-bottom: 8px;">Suppliers Management</h2>
      <div style="display: flex; gap: 20px; margin-top: 20px;">
        <!-- Supplier Form -->
        <div style="flex: 1;">
          <h3 style="color: #444;">Add New Supplier</h3>
          <form style="display: flex; flex-direction: column; gap: 12px;">
            <input type="text" placeholder="Supplier Name" style="padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
            <input type="text" placeholder="Contact Person" style="padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
            <input type="email" placeholder="Email" style="padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
            <input type="date" placeholder="Agreement Expiry" style="padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
            <button style="background-color: #8B0000; color: white; padding: 10px; border: none; border-radius: 4px; cursor: pointer;">Save Supplier</button>
          </form>
        </div>
        <!-- Supplier List -->
        <div style="flex: 2;">
          <h3 style="color: #444;">Existing Suppliers</h3>
          <table style="width: 100%; border-collapse: collapse;">
            <thead>
              <tr style="background-color: #f8f8f8;">
                <th style="padding: 10px; text-align: left; border-bottom: 2px solid #ddd;">Name</th>
                <th style="padding: 10px; text-align: left; border-bottom: 2px solid #ddd;">Contact</th>
                <th style="padding: 10px; text-align: left; border-bottom: 2px solid #ddd;">Expiry Date</th>
                <th style="padding: 10px; text-align: left; border-bottom: 2px solid #ddd;">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid #eee;">
                <td style="padding: 10px;">ABC Supplies</td>
                <td style="padding: 10px;">John Doe (john@abc.com)</td>
                <td style="padding: 10px;">2024-12-31</td>
                <td style="padding: 10px;">
                  <button style="background-color: #ffcc00; padding: 5px 10px; border: none; border-radius: 3px; margin-right: 5px;">Edit</button>
                  <button style="background-color: #dc3545; color: white; padding: 5px 10px; border: none; border-radius: 3px;">Delete</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- Customers Section -->
    <section style="margin-bottom: 40px; border: 1px solid #ddd; padding: 20px; border-radius: 8px;">
      <h2 style="color: #8B0000; border-bottom: 2px solid #8B0000; padding-bottom: 8px;">Customers Management</h2>
      <div style="display: flex; gap: 20px; margin-top: 20px;">
        <!-- Customer Form -->
        <div style="flex: 1;">
          <h3 style="color: #444;">Add New Customer</h3>
          <form style="display: flex; flex-direction: column; gap: 12px;">
            <input type="text" placeholder="Customer Name" style="padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
            <input type="email" placeholder="Email" style="padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
            <input type="text" placeholder="Phone" style="padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
            <input type="number" placeholder="Credit Limit" style="padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
            <button style="background-color: #8B0000; color: white; padding: 10px; border: none; border-radius: 4px; cursor: pointer;">Save Customer</button>
          </form>
        </div>
        <!-- Customer List -->
        <div style="flex: 2;">
          <h3 style="color: #444;">Customer Directory</h3>
          <table style="width: 100%; border-collapse: collapse;">
            <thead>
              <tr style="background-color: #f8f8f8;">
                <th style="padding: 10px; text-align: left; border-bottom: 2px solid #ddd;">Name</th>
                <th style="padding: 10px; text-align: left; border-bottom: 2px solid #ddd;">Email</th>
                <th style="padding: 10px; text-align: left; border-bottom: 2px solid #ddd;">Credit Limit</th>
                <th style="padding: 10px; text-align: left; border-bottom: 2px solid #ddd;">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid #eee;">
                <td style="padding: 10px;">XYZ Corporation</td>
                <td style="padding: 10px;">sales@xyz.com</td>
                <td style="padding: 10px;">$50,000</td>
                <td style="padding: 10px;">
                  <button style="background-color: #ffcc00; padding: 5px 10px; border: none; border-radius: 3px; margin-right: 5px;">Edit</button>
                  <button style="background-color: #dc3545; color: white; padding: 5px 10px; border: none; border-radius: 3px;">Delete</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- Products Section -->
    <section style="margin-bottom: 40px; border: 1px solid #ddd; padding: 20px; border-radius: 8px;">
      <h2 style="color: #8B0000; border-bottom: 2px solid #8B0000; padding-bottom: 8px;">Product Catalog</h2>
      <div style="display: flex; gap: 20px; margin-top: 20px;">
        <!-- Product Form -->
        <div style="flex: 1;">
          <h3 style="color: #444;">Add New Product</h3>
          <form style="display: flex; flex-direction: column; gap: 12px;">
            <input type="text" placeholder="Product Name" style="padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
            <input type="text" placeholder="SKU" style="padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
            <input type="number" placeholder="Price" style="padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
            <input type="number" placeholder="Stock Level" style="padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
            <button style="background-color: #8B0000; color: white; padding: 10px; border: none; border-radius: 4px; cursor: pointer;">Save Product</button>
          </form>
        </div>
        <!-- Product List -->
        <div style="flex: 2;">
          <h3 style="color: #444;">Product Inventory</h3>
          <table style="width: 100%; border-collapse: collapse;">
            <thead>
              <tr style="background-color: #f8f8f8;">
                <th style="padding: 10px; text-align: left; border-bottom: 2px solid #ddd;">SKU</th>
                <th style="padding: 10px; text-align: left; border-bottom: 2px solid #ddd;">Product Name</th>
                <th style="padding: 10px; text-align: left; border-bottom: 2px solid #ddd;">Price</th>
                <th style="padding: 10px; text-align: left; border-bottom: 2px solid #ddd;">Stock</th>
                <th style="padding: 10px; text-align: left; border-bottom: 2px solid #ddd;">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid #eee;">
                <td style="padding: 10px;">PROD-001</td>
                <td style="padding: 10px;">Premium Widget</td>
                <td style="padding: 10px;">$49.99</td>
                <td style="padding: 10px;">250</td>
                <td style="padding: 10px;">
                  <button style="background-color: #ffcc00; padding: 5px 10px; border: none; border-radius: 3px; margin-right: 5px;">Edit</button>
                  <button style="background-color: #dc3545; color: white; padding: 5px 10px; border: none; border-radius: 3px;">Delete</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <!-- Employees Section -->
    <section style="border: 1px solid #ddd; padding: 20px; border-radius: 8px;">
      <h2 style="color: #8B0000; border-bottom: 2px solid #8B0000; padding-bottom: 8px;">Employee Management</h2>
      <div style="display: flex; gap: 20px; margin-top: 20px;">
        <!-- Employee Form -->
        <div style="flex: 1;">
          <h3 style="color: #444;">Add Employee</h3>
          <form style="display: flex; flex-direction: column; gap: 12px;">
            <input type="text" placeholder="Employee Name" style="padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
            <select style="padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
              <option>Select Role</option>
              <option>Manager</option>
              <option>Supervisor</option>
              <option>Staff</option>
            </select>
            <input type="text" placeholder="Work Location" style="padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
            <div>
              <label style="display: block; margin-bottom: 5px;">Permissions:</label>
              <div style="display: flex; gap: 15px;">
                <label><input type="checkbox"> Inventory Access</label>
                <label><input type="checkbox"> Sales Access</label>
                <label><input type="checkbox"> Admin</label>
              </div>
            </div>
            <button style="background-color: #8B0000; color: white; padding: 10px; border: none; border-radius: 4px; cursor: pointer;">Save Employee</button>
          </form>
        </div>
        <!-- Employee List -->
        <div style="flex: 2;">
          <h3 style="color: #444;">Employee Directory</h3>
          <table style="width: 100%; border-collapse: collapse;">
            <thead>
              <tr style="background-color: #f8f8f8;">
                <th style="padding: 10px; text-align: left; border-bottom: 2px solid #ddd;">Name</th>
                <th style="padding: 10px; text-align: left; border-bottom: 2px solid #ddd;">Role</th>
                <th style="padding: 10px; text-align: left; border-bottom: 2px solid #ddd;">Location</th>
                <th style="padding: 10px; text-align: left; border-bottom: 2px solid #ddd;">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid #eee;">
                <td style="padding: 10px;">Sarah Johnson</td>
                <td style="padding: 10px;">Manager</td>
                <td style="padding: 10px;">Head Office</td>
                <td style="padding: 10px;">
                  <button style="background-color: #ffcc00; padding: 5px 10px; border: none; border-radius: 3px; margin-right: 5px;">Edit</button>
                  <button style="background-color: #dc3545; color: white; padding: 5px 10px; border: none; border-radius: 3px;">Delete</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>

  <!-- Footer -->
  <footer style="background-color: #333; color: white; text-align: center; padding: 15px; margin-top: 30px;">
    <p style="margin: 0;">© 2023 Master File Management System. All rights reserved.</p>
  </footer>
</body>
</html>