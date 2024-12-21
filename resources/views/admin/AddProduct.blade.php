<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ürün Ekle</title>
</head>
<body>
    <h1>Ürün Ekle</h1>

    <!-- Form -->
    <form action="{{ route('addproduct') }}" method="POST">
        @csrf
        
        <label for="name">Ürün Adı:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="description">Açıklama:</label>
        <textarea id="description" name="description"></textarea><br>

        <label for="price">Fiyat:</label>
        <input type="number" id="price" name="price" step="0.01" required><br>

        <label for="image">Görsel Url:</label>
        <input type="text" id="image" name="image" required><br>

        <label for="product_url">Ürün Sayfası URL:</label>
        <input type="text" id="product_url" name="product_url" readonly><br>

        <button type="submit">Kaydet</button>
    </form>

<script>
    // Formdaki ürün adı input alanı
    const nameInput = document.getElementById('name');
    const urlInput = document.getElementById('product_url');

    // Kullanıcı adı girdiğinde URL'yi güncelleyen fonksiyon
    nameInput.addEventListener('input', function() {
        const productName = nameInput.value;

        if (productName) {
            // Ürün adına göre URL oluştur
            const dynamicUrl = `/product/${productName.replace(/\s+/g, '-').toLowerCase()}`;
            urlInput.value = dynamicUrl;  // URL'yi input alanına yazdır
        } else {
            urlInput.value = '';  // Eğer ürün adı yoksa URL'yi temizle
        }
    });
</script>

</body>
</html>
