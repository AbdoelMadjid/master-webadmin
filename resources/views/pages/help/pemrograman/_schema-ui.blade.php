<style>
    :root {
        --schema-ink: #10243f;
        --schema-muted: #5b6b7f;
        --schema-surface: #ffffff;
        --schema-line: #d7e3f2;
        --schema-accent: #0f766e;
        --schema-accent-soft: #e6f7f4;
        --schema-warn: #b45309;
        --schema-warn-soft: #fff5e6;
        --schema-info-soft: #e9f2ff;
        --schema-code-ink: #183a61;
    }

    .schema-shell {
        font-family: "Poppins", "Nunito Sans", sans-serif;
        background:
            radial-gradient(1100px 420px at 0% 0%, #e6f7f4 0%, transparent 60%),
            radial-gradient(900px 380px at 100% 0%, #eef4ff 0%, transparent 55%);
        border: 1px solid var(--schema-line);
        border-radius: 1rem;
        padding: 1.5rem;
    }

    .schema-hero {
        background: linear-gradient(120deg, #0f766e, #0b4e85);
        color: #fff;
        border-radius: 1rem;
        padding: 1.25rem 1.25rem 1rem;
        box-shadow: 0 20px 45px rgba(8, 36, 69, .18);
        margin-bottom: 1rem;
        animation: schemaFadeUp .35s ease-out both;
    }

    .schema-hero h2 {
        margin: .2rem 0 .35rem;
        color: #fff;
    }

    .schema-pill {
        display: inline-flex;
        align-items: center;
        gap: .4rem;
        border-radius: 999px;
        padding: .3rem .7rem;
        font-size: .72rem;
        letter-spacing: .02em;
        text-transform: uppercase;
        font-weight: 700;
        background: rgba(255, 255, 255, .16);
        color: #fff;
    }

    .schema-lead {
        color: rgba(255, 255, 255, .9);
        margin: 0;
    }

    .schema-grid {
        display: grid;
        grid-template-columns: repeat(12, minmax(0, 1fr));
        gap: 1rem;
    }

    .schema-col-6 {
        grid-column: span 6 / span 6;
    }

    .schema-col-12 {
        grid-column: span 12 / span 12;
    }

    .schema-card {
        background: var(--schema-surface);
        border: 1px solid var(--schema-line);
        border-radius: .9rem;
        padding: 1rem;
        animation: schemaFadeUp .45s ease-out both;
    }

    .schema-card h4 {
        color: var(--schema-ink);
        margin-bottom: .6rem;
        font-weight: 700;
    }

    .schema-note {
        background: var(--schema-info-soft);
        border-left: 4px solid #1d4ed8;
        border-radius: .7rem;
        padding: .75rem .85rem;
        color: #1e3a5f;
        font-size: .9rem;
    }

    .schema-warn {
        background: var(--schema-warn-soft);
        border-left: 4px solid var(--schema-warn);
        border-radius: .7rem;
        padding: .75rem .85rem;
        color: #7a3e0b;
        font-size: .9rem;
    }

    .schema-list {
        margin: 0;
        padding-left: 1.1rem;
        color: var(--schema-muted);
    }

    .schema-list li {
        margin-bottom: .45rem;
    }

    .schema-flow {
        display: grid;
        gap: .65rem;
    }

    .schema-step {
        border: 1px dashed #b9cde8;
        background: #f8fbff;
        border-radius: .75rem;
        padding: .65rem .75rem;
        color: #173459;
        font-size: .92rem;
        position: relative;
    }

    .schema-step code {
        color: #0b4e85;
    }

    .schema-code {
        margin: 0;
        border-radius: .8rem;
        padding: .9rem;
        background: linear-gradient(125deg, #f4f8ff, #edf7f4);
        color: var(--schema-code-ink);
        font-size: .84rem;
        border: 1px solid #c9dcef;
        box-shadow: 0 8px 18px rgba(28, 67, 110, .08), inset 0 1px 0 rgba(255, 255, 255, .7);
        overflow: auto;
    }

    .schema-code code {
        color: var(--schema-code-ink);
        font-family: "JetBrains Mono", "Fira Code", Consolas, "Courier New", monospace;
        line-height: 1.6;
    }

    .schema-chip {
        display: inline-block;
        margin: 0 .3rem .35rem 0;
        background: var(--schema-accent-soft);
        color: var(--schema-accent);
        border: 1px solid #bdebe4;
        border-radius: .6rem;
        padding: .25rem .55rem;
        font-size: .78rem;
        font-weight: 600;
    }

    .schema-meta {
        display: flex;
        flex-wrap: wrap;
        gap: .4rem;
        margin-top: .5rem;
    }

    @keyframes schemaFadeUp {
        from {
            opacity: 0;
            transform: translateY(8px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 991.98px) {
        .schema-col-6 {
            grid-column: span 12 / span 12;
        }
    }
</style>