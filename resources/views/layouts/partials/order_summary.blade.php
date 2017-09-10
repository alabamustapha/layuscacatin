<div class="box" id="order-summary">
    <div class="box-header">
        <h3>Order summary</h3>
    </div>
    <p class="text-muted">Extra cost might be added to your total depending on the payment method selected.</p>

    <div class="table-responsive">
        <table class="table">
            <tbody>
                <tr>
                    <td>Order subtotal</td>
                    <th>{{ '&#x20A6;'. Cart::subtotal() }}</th>
                </tr>
                <tr>
                    <td>Shipping and handling</td>
                    <th></th>
                </tr>
                <tr class="total">
                    <td>Total</td>
                    <th>{{ '&#x20A6;'. Cart::total() }}</th>
                </tr>
            </tbody>
        </table>
    </div>

</div>