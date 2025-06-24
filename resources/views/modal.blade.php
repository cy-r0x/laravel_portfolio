<div class="custom-modal">
    <div class="modal-data d-flex flex-column">
        <p class="jura" style="font-size: 32px; font-weight: 700; margin: 0">
            About Me
        </p>
        <hr />
        <div class="px-3">
            <p class="mb-3">
                I am a dedicated competitive programmer with expertise in
                algorithm design and problem-solving. My analytical approach has
                led to consistent performance improvement across multiple
                competitive platforms.
            </p>
            <p class="mb-3">
                Current achievements include a maximum rating of
                <span class="badge text-bg-success fw-bold">1278</span> on
                Codeforces and
                <span class="badge text-bg-primary fw-bold">1603</span> on
                CodeChef.
            </p>
            <p class="mb-4">
                In 2024, I was selected as an
                <strong>ICPC Regional Finalist</strong>, competing alongside
                top-tier programmers in this prestigious international
                competition.
            </p>
        </div>
        <div>
            <p class="jura" style="font-size: 32px; font-weight: 700">
                Current Achievements
            </p>
            <hr />

            <div class="my-card">
                <img
                    src="{{ asset('assets/code-forces.svg') }}"
                    alt="Codeforces logo"
                />
                <p>
                    Codeforces Rating:
                    <span style="color: green; font-weight: 700">1278</span>
                    (Maximum)
                </p>
            </div>
            <div class="my-card">
                <img
                    src="{{ asset('assets/code-chef.svg') }}"
                    alt="CodeChef logo"
                />
                <p>
                    CodeChef Rating:
                    <span style="color: blue; font-weight: 700">1603</span>
                    (Maximum)
                </p>
            </div>
            <div class="my-card">
                <img src="{{ asset('assets/icpc.svg') }}" alt="CodeChef logo" />
                <p>ICPC Regional Finalist 2024</p>
            </div>
        </div>
        <div style="display: flex; justify-content: end">
            <button class="btn btn-secondary" id="btn-close">Close</button>
        </div>
    </div>
</div>
