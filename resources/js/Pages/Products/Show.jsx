import { Link } from '@inertiajs/react';

export default function Show({ product }) {
  return (
    <div style={{ maxWidth: '800px', margin: '0 auto', padding: '20px', border: '1px solid #ddd', borderRadius: '8px', boxShadow: '0 4px 8px rgba(0, 0, 0, 0.1)' }}>
      <img
        src={product.image}
        alt={product.name}
        style={{ maxWidth: '100%', height: '300px', objectFit: 'cover', marginBottom: '20px', borderRadius: '8px' }}
      />
      <h1 style={{ fontSize: '2rem', color: '#333', marginBottom: '15px' }}>{product.name}</h1>
      <p style={{ fontSize: '1.1rem', color: '#555', marginBottom: '10px' }}>{product.description}</p>
      <p style={{ fontSize: '1.5rem', fontWeight: 'bold', color: '#007BFF', marginBottom: '20px' }}>
        ราคา: ${product.price}
      </p>
      <Link
        href="/products"
        style={{
          display: 'inline-block',
          textDecoration: 'none',
          backgroundColor: '#dc3545',
          color: '#fff',
          padding: '8px 12px',
          borderRadius: '4px',
        }}
      >
        กลับไปยังหน้าสินค้า
      </Link>
    </div>
  );
}
