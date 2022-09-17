<?php

namespace App\Http\Controllers\Dashboard\General;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\General\CouponRequest;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::all();

        return view('general.coupons.index', compact('coupons'));
    }
    public function create()
    {
        return view('general.coupons.create');
    }
    public function edit(Coupon $coupon)
    {
        return view('general.coupons.edit', compact('coupon'));
    }
    public function show(Coupon $coupon)
    {
        return view('general.coupons.show', compact('coupon'));
    }
    public function store(CouponRequest $request)
    {
        $validated = $request->validated();
        data_set($validated, 'code', rand(1111, 9999));
        Coupon::create($validated);
        return redirect(route('coupons.index'));
    }
    public function update(Coupon $coupon, CouponRequest $request)
    {
        $validated = $request->validated();
        $coupon->update($validated);
        return redirect(route('coupons.index'));
    }
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        return redirect(route('coupons.index'));
    }
}
