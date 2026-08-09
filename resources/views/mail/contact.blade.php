<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Baru dari Form Kontak</title>
    <style>
        body { margin: 0; padding: 24px; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif; background: #f6f7f9; color: #16181d; }
        .wrap { max-width: 560px; margin: 0 auto; background: #ffffff; border: 1px solid #e6e8ec; border-radius: 12px; overflow: hidden; }
        .head { background: #0b3d7d; color: #fff; padding: 20px 24px; }
        .head h1 { margin: 0; font-size: 18px; font-weight: 600; }
        .body { padding: 24px; }
        .row { padding: 10px 0; border-bottom: 1px solid #eef0f3; }
        .row:last-child { border-bottom: none; }
        .row .label { font-size: 11px; text-transform: uppercase; letter-spacing: .5px; color: #6b7280; margin-bottom: 2px; }
        .row .value { font-size: 15px; color: #111827; word-break: break-word; }
        .foot { padding: 16px 24px; font-size: 12px; color: #9ca3af; border-top: 1px solid #eef0f3; }
    </style>
</head>
<body>
    <div class="wrap">
        <div class="head">
            <h1>Pesan Baru dari Form Kontak Website</h1>
        </div>
        <div class="body">
            <div class="row">
                <div class="label">Nama</div>
                <div class="value">{{ $data['name'] }}</div>
            </div>
            <div class="row">
                <div class="label">Email</div>
                <div class="value"><a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></div>
            </div>
            <div class="row">
                <div class="label">No. Telepon</div>
                <div class="value">{{ $data['phone'] }}</div>
            </div>
            <div class="row">
                <div class="label">Pesan</div>
                <div class="value">{{ $data['message'] }}</div>
            </div>
        </div>
        <div class="foot">Dikirim otomatis dari halaman Hubungi Kami — pt.jernihmultikomunikasi</div>
    </div>
</body>
</html>