<?php

use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LawyerFEController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

// Route::get('/lawyer', function () {
//     return view('lawyer');
// });

Route::get('lawyer/lawyer1', function () {
    return view('lawyer.lawyer1');
});

// Route::get('detailLawyer', function () {
//     return view('detailLawyer');
// });

Route::get('lawyer/lawyer2', function () {
    return view('lawyer.lawyer2');
});

Route::get('/lawyer', [LawyerFEController::class, 'index'])->name('lawyer');

Route::get('/{id}/detailLawyer', [LawyerFEController::class, 'detail'])->name('detailLawyer');

Route::get('admin/layout', function(){
    return view('layouts.adminlayout');
});

Auth::routes();

Route::prefix('/')->middleware('auth')->group(function(){

    // Admin Lawyer
    Route::get('admin/add-lawyer', function(){
        return view('admin.addlawyer');
    });

    Route::get('admin/list-lawyer', [LawyerController::class, 'index'])->name('admin.list-lawyer');
    Route::post('admin/addlawyer', [LawyerController::class, 'addLawyer'])->name('add.lawyer');
    Route::get('admin/{id}/edit', [LawyerController::class, 'showByID'])->name('admin.edit');
    Route::put('admin/{id}/update', [LawyerController::class, 'updateLawyer'])->name('admin.update');
    Route::get('admin/{id}/detail-lawyer', [LawyerController::class, 'detail'])->name('admin.detail');
    Route::delete('admin/{id}/delete-lawyer', [LawyerController::class, 'delete'])->name('admin.delete');

    // Admin Transaksi
    Route::get('admin/transaksi/transaction', [TransaksiController::class, 'showTransaction'])->name('admin.transaction-all');
    Route::get('admin/transaksi/{id}/detail', [TransaksiController::class, 'ticketChecking'])->name('detail.transaksi');
    Route::put('admin/transaksi/{id}/update', [TransaksiController::class, 'updateTicket'])->name('update.transaksi');
    Route::delete('admin/transaksi/{id}/delete', [TransaksiController::class, 'deleteTiket'])->name('delete.transaksi');

    // Admin Feedback
    Route::get('/admin/feedback/', [FeedbackController::class, 'showFeedback'])->name('home.feed');
    Route::get('/admin/feedback/{id}/detail', [FeedbackController::class, 'showById'])->name('detail.feed');
    Route::get('/admin/feedback/{id}/response', [FeedbackController::class, 'sendEmail'])->name('send.feedback');

    // Edit Profile
    Route::get('admin/{id}/detail-profile', [HomeController::class, 'showDetail'])->name('detail.profile');
    Route::put('admin/{id}/edit-profile', [HomeController::class, 'updateProfile'])->name('edit.profile');
});

Route::get('/lawyer@ekonomi',[LawyerController::class, 'showLayer']);

Route::post('/', [TransaksiController::class, 'inputTicket'])->name('jadwalkan');
Route::get('/cari', [TransaksiController::class, 'userTicketCheck'])->name('cari.tiket');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

?>
