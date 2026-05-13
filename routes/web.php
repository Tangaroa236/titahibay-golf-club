use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MemberPostController;

// Member profiles & social feed — logged in members only
Route::middleware(['auth'])->group(function () {

    // Profile
    Route::get('/profile/{user}', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit/me', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/edit/me', [ProfileController::class, 'update'])->name('profile.update');

    // Posts
    Route::post('/member-posts', [MemberPostController::class, 'store'])->name('member-posts.store');
    Route::delete('/member-posts/{memberPost}', [MemberPostController::class, 'destroy'])->name('member-posts.destroy');

    // Likes
    Route::post('/member-posts/{memberPost}/like', [MemberPostController::class, 'like'])->name('member-posts.like');

    // Comments
    Route::post('/member-posts/{memberPost}/comment', [MemberPostController::class, 'comment'])->name('member-posts.comment');
    Route::delete('/member-post-comments/{memberPostComment}', [MemberPostController::class, 'destroyComment'])->name('member-post-comments.destroy');
});