<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Formulario de Contacto</title>
  <style>
    * { box-sizing: border-box; }
    body {
      margin: 0;
      font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      background: #0f172a;
      color: #e2e8f0;
      display: grid;
      place-items: center;
      min-height: 100vh;
      padding: 24px;
    }

    .card {
      width: 100%;
      max-width: 520px;
      background: rgba(255,255,255,0.06);
      border: 1px solid rgba(255,255,255,0.12);
      border-radius: 16px;
      padding: 22px;
      backdrop-filter: blur(10px);
      box-shadow: 0 10px 30px rgba(0,0,0,0.35);
    }

    .title {
      margin: 0 0 6px;
      font-size: 22px;
      font-weight: 700;
      letter-spacing: .2px;
    }

    .subtitle {
      margin: 0 0 18px;
      font-size: 14px;
      color: rgba(226,232,240,0.8);
      line-height: 1.4;
    }

    label {
      display: block;
      margin: 12px 0 6px;
      font-size: 13px;
      color: rgba(226,232,240,0.9);
    }

    input, textarea {
      width: 100%;
      padding: 12px 12px;
      border-radius: 12px;
      border: 1px solid rgba(255,255,255,0.15);
      background: rgba(15,23,42,0.65);
      color: #e2e8f0;
      outline: none;
      transition: border-color .2s ease, box-shadow .2s ease, transform .05s ease;
    }

    input::placeholder, textarea::placeholder {
      color: rgba(226,232,240,0.45);
    }

    input:focus, textarea:focus {
      border-color: rgba(56,189,248,0.6);
      box-shadow: 0 0 0 4px rgba(56,189,248,0.15);
    }

    textarea {
      min-height: 130px;
      resize: vertical;
    }

    .row {
      display: flex;
      gap: 12px;
      align-items: center;
      justify-content: space-between;
      margin-top: 16px;
    }

    .btn {
      width: 100%;
      padding: 12px 14px;
      border: 0;
      border-radius: 12px;
      font-weight: 700;
      cursor: pointer;
      background: linear-gradient(135deg, #38bdf8, #6366f1);
      color: #0b1220;
      transition: transform .08s ease, filter .2s ease;
    }

    .btn:hover { filter: brightness(1.05); }
    .btn:active { transform: scale(0.99); }

    .hint {
      margin-top: 10px;
      font-size: 12px;
      color: rgba(226,232,240,0.7);
    }
  </style>
</head>
<body>

  <div class="card">
    <h1 class="title">Contáctame</h1>
    <p class="subtitle">Escribe tu correo y tu mensaje. Te responderé lo antes posible.</p>

    <form action="#" method="post">
      <label for="correo">Correo</label>
      <input
        type="email"
        id="correo"
        name="correo"
        placeholder="tucorreo@ejemplo.com"
        required
      />

      <label for="mensaje">Mensaje</label>
      <textarea
        id="mensaje"
        name="mensaje"
        placeholder="Escribe tu mensaje aquí..."
        required
      ></textarea>

      <div class="row">
        <button class="btn" type="submit">Enviar</button>
      </div>

      <div class="hint">* Este formulario es solo el diseño. Para enviarlo realmente, debes conectarlo a un backend (PHP/Laravel, etc.).</div>
    </form>
  </div>

</body>
</html>
