# Simple Inventory CRUD - Laravel

A simple inventory management system built with Laravel featuring Create, Read, Update, and Delete (CRUD) operations.

## Features

- ✅ List all inventory items
- ✅ Create new inventory items
- ✅ View item details
- ✅ Edit existing items
- ✅ Delete items
- ✅ SKU validation (unique)
- ✅ Responsive UI with Tailwind CSS

## Project Structure

```
Simple_crud/
├── app/
│   └── Models/
│       └── Inventory.php          # Inventory model with fillable properties
├── app/Http/Controllers/
│   └── InventoryController.php    # CRUD operations controller
├── database/
│   └── migrations/
│       └── 2026_09_04_053519_create_inventories_table.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php       # Main layout template
│       └── inventories/
│           ├── index.blade.php     # List all items
│           ├── create.blade.php    # Create new item form
│           ├── edit.blade.php      # Edit item form
│           └── show.blade.php      # View item details
├── routes/
│   └── web.php                    # Web routes with resource controller
└── .env                           # Environment configuration
```

## Database Schema

### Inventories Table

| Column | Type | Constraints |
|--------|------|-------------|
| id | Integer | Primary Key |
| name | String(255) | Required |
| description | Text | Nullable |
| quantity | Integer | Default: 0 |
| price | Decimal(10,2) | Required |
| sku | String | Unique, Required |
| created_at | Timestamp | |
| updated_at | Timestamp | |

## Installation & Setup

### Prerequisites
- PHP 8.1 or higher
- Composer
- SQLite or MySQL/PostgreSQL
- Node.js (optional, for frontend development)

### Steps

1. **Install Dependencies**
   ```bash
   cd f:\Simple_crud
   composer install
   ```

2. **Copy Environment File**
   ```bash
   copy .env.example .env
   ```

3. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

4. **Configure Database** (if not using SQLite)
   Edit `.env` file:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=inventory_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Run Migrations**
   ```bash
   php artisan migrate
   ```

6. **Start Development Server**
   ```bash
   php artisan serve
   ```

7. **Access the Application**
   Open your browser and go to: `http://localhost:8000/inventories`

## Usage

### List Items
Navigate to `/inventories` to view all inventory items in a table format.

### Add New Item
1. Click "Add New Item" button
2. Fill in the form:
   - Name (required)
   - SKU (required, must be unique)
   - Quantity (required, minimum 0)
   - Price (required, decimal format)
   - Description (optional)
3. Click "Add Item"

### View Item Details
Click the "View" button on any item to see its full details.

### Edit Item
1. Click the "Edit" button on any item
2. Modify the desired fields
3. Click "Update Item"

### Delete Item
Click the "Delete" button and confirm to remove an item from inventory.

## Validation Rules

- **Name**: Required, string, max 255 characters
- **SKU**: Required, string, unique across all items
- **Quantity**: Required, integer, minimum 0
- **Price**: Required, numeric, minimum 0
- **Description**: Optional, string

## Styling

The application uses:
- **Tailwind CSS** for responsive UI
- **Bootstrap-like table** design for data display
- **Clean, minimal form** layouts

## API Routes

| Method | Route | Controller Action |
|--------|-------|-------------------|
| GET | /inventories | InventoryController@index |
| GET | /inventories/create | InventoryController@create |
| POST | /inventories | InventoryController@store |
| GET | /inventories/{id} | InventoryController@show |
| GET | /inventories/{id}/edit | InventoryController@edit |
| PUT | /inventories/{id} | InventoryController@update |
| DELETE | /inventories/{id} | InventoryController@destroy |

## Future Enhancements

- [ ] Add authentication/authorization
- [ ] Add search and filter functionality
- [ ] Add pagination for large datasets
- [ ] Add bulk operations (import/export)
- [ ] Add inventory history tracking
- [ ] Add stock alerts
- [ ] Add API endpoints (JSON responses)
- [ ] Add unit tests

## Troubleshooting

### "SQLSTATE[HY000]: General error"
- Make sure you've run migrations: `php artisan migrate`
- Check `.env` database configuration

### "View not found" errors
- Ensure all view files are in `resources/views/inventories/`
- Clear cache: `php artisan view:clear`

### Port 8000 already in use
- Use: `php artisan serve --port=8001`

## License

MIT License - Feel free to use this project for learning and development.

## Support

For issues or questions, refer to the [Laravel Documentation](https://laravel.com/docs)
