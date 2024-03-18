calculate price request
```
curl -X POST http://localhost/calculate-price -H 'Content-Type: application/json' -d '{"product":1, "taxNumber":"IT12345678", "couponCode":"P15"}' -i
```

purchase request
```
curl -X POST http://localhost/purchase -H 'Content-Type: application/json' -d '{"product":1, "taxNumber":"IT12345678", "couponCode":"P15", "paymentProcessor":"paypal"}' -i
```
