<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Company Profile</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f9f9f9;">
  <!-- Header -->
  <header style="background-color: #8B0000; color: white; padding: 20px; text-align: center;">
    <h1 style="margin: 0; font-size: 2.5rem;">Company Profile</h1>
  </header>

  <!-- Main Container -->
  <div style="max-width: 800px; margin: 20px auto; padding: 20px; background-color: white; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <!-- Company Information Section -->
    <section style="margin-bottom: 40px;">
      <h2 style="color: #8B0000; border-bottom: 2px solid #8B0000; padding-bottom: 5px;">Company Information</h2>
      <form>
        <!-- Company Name -->
        <div style="margin-bottom: 15px;">
          <label for="company-name" style="display: block; margin-bottom: 5px; color: #333; font-weight: bold;">Company Name</label>
          <input type="text" id="company-name" name="company-name" placeholder="Enter company name" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
        </div>
        <!-- Address -->
        <div style="margin-bottom: 15px;">
          <label for="address" style="display: block; margin-bottom: 5px; color: #333; font-weight: bold;">Address</label>
          <input type="text" id="address" name="address" placeholder="Enter company address" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
        </div>
        <!-- Contact Details -->
        <div style="margin-bottom: 15px;">
          <label for="contact" style="display: block; margin-bottom: 5px; color: #333; font-weight: bold;">Contact Details</label>
          <input type="text" id="contact" name="contact" placeholder="Enter contact details" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
        </div>
      </form>
    </section>

    <!-- System Preferences Section -->
    <section style="margin-bottom: 40px;">
      <h2 style="color: #8B0000; border-bottom: 2px solid #8B0000; padding-bottom: 5px;">System Preferences</h2>
      <form>
        <!-- Currency -->
        <div style="margin-bottom: 15px;">
          <label for="currency" style="display: block; margin-bottom: 5px; color: #333; font-weight: bold;">Currency</label>
          <select id="currency" name="currency" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
            <option value="USD">USD (United States Dollar)</option>
            <option value="EUR">EUR (Euro)</option>
            <option value="GBP">GBP (British Pound)</option>
            <option value="INR">INR (Indian Rupee)</option>
          </select>
        </div>
        <!-- Tax Rate -->
        <div style="margin-bottom: 15px;">
          <label for="tax-rate" style="display: block; margin-bottom: 5px; color: #333; font-weight: bold;">Tax Rate (%)</label>
          <input type="number" id="tax-rate" name="tax-rate" placeholder="Enter tax rate" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
        </div>
        <!-- Fiscal Year -->
        <div style="margin-bottom: 15px;">
          <label for="fiscal-year" style="display: block; margin-bottom: 5px; color: #333; font-weight: bold;">Fiscal Year</label>
          <input type="text" id="fiscal-year" name="fiscal-year" placeholder="Enter fiscal year (e.g., 2023-2024)" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
        </div>
      </form>
    </section>

    <!-- User Roles and Permissions Section -->
    <section>
      <h2 style="color: #8B0000; border-bottom: 2px solid #8B0000; padding-bottom: 5px;">User Roles and Permissions</h2>
      <form>
        <!-- Role Name -->
        <div style="margin-bottom: 15px;">
          <label for="role-name" style="display: block; margin-bottom: 5px; color: #333; font-weight: bold;">Role Name</label>
          <input type="text" id="role-name" name="role-name" placeholder="Enter role name" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
        </div>
        <!-- Permissions -->
        <div style="margin-bottom: 15px;">
          <label style="display: block; margin-bottom: 5px; color: #333; font-weight: bold;">Permissions</label>
          <div style="display: flex; flex-wrap: wrap; gap: 10px;">
            <label style="display: flex; align-items: center; gap: 5px;">
              <input type="checkbox" name="permissions" value="view"> View
            </label>
            <label style="display: flex; align-items: center; gap: 5px;">
              <input type="checkbox" name="permissions" value="edit"> Edit
            </label>
            <label style="display: flex; align-items: center; gap: 5px;">
              <input type="checkbox" name="permissions" value="delete"> Delete
            </label>
            <label style="display: flex; align-items: center; gap: 5px;">
              <input type="checkbox" name="permissions" value="admin"> Admin
            </label>
          </div>
        </div>
        <!-- Save Button -->
        <button type="submit" style="background-color: #8B0000; color: white; border: none; padding: 10px 20px; border-radius: 5px; font-size: 16px; cursor: pointer;">Save Role</button>
      </form>
    </section>
  </div>

  <!-- Footer -->
  <footer style="background-color: #333; color: white; text-align: center; padding: 10px;">
    <p style="margin: 0;">&copy; 2023 Company Profile Module. All rights reserved.</p>
  </footer>
</body>
</html>