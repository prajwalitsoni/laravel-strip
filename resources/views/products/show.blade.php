
<style>
    .form-group {
        margin-bottom: 15px;
    }

    #card-element {
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 4px;
    }

    #card-errors {
        color: red;
        margin-top: 10px;
    }

    button[type="submit"] {
        background-color: #28a745;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #218838;
    }
    .product-image {
        max-width: 20%;
        height: auto;
        margin-bottom: 15px;
    }
</style>

<img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="product-image">
<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>
<p>Price: ${{ $product->price }}</p>

<form action="{{ route('checkout.charge') }}" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="pk_test_51QtqI6Pve0eqSjIDzD9dzuwtPIno0FqIoZwCmp0eVwoj9COfgfkD4Ea0GewiDiw5bLV99Pdiy2VJxVUXJPttqVRH00BwZfKaoP"
        data-amount="{{ $product->price * 100 }}"
        data-name="{{ $product->name }}"
        data-description="{{ $product->description }}"
        data-currency="usd">
    </script>
</form>
