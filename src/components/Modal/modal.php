<div class="modal-container open hidden">
    <div class="modal open">
        <div class="modal-header noselect">
            <div class="left">
                <h1>Login</h1>
                <p>Login to your account</p>
            </div>
            <div class="close-button" onclick="hideModal()">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em"
                    width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"
                        d="M368 368L144 144m224 0L144 368"></path>
                </svg>
            </div>
        </div>
        <form id="loginForm" action="src/apiservices/login.php" method="post">
            <div class="modal-content">
                <div class="padded-content">
                    <div class="text-input-container">
                        <h4>Email</h4>
                        <div class="text-input-wrapper">
                            <input type="text" class="text-input" name="email" placeholder="Enter your email" value=""
                                fdprocessedid="2fw6pn">
                        </div>
                        <p class="text-input-error">Please enter a valid email</p>
                    </div>
                </div>
                <div class="padded-content">
                    <div class="text-input-container">
                        <h4>Password</h4>
                        <div class="text-input-wrapper">
                            <input type="password" class="text-input" name="password" placeholder="Enter your password"
                                value="" fdprocessedid="stooa">
                            <div class="text-input-eye">
                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                    stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                    <path
                                        d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <p class="text-input-error">Please enter a valid password</p>
                    </div>
                </div>
                <div class="modal-footer noselect">
                <div class="left"></div>
                <div class="right">
                    <button class="close-button" type="submit" fdprocessedid="1byok">Login</button>
                </div>
            </div>
            </div>
        </form>
    </div>
</div>

<script>
    function hideModal() {
        var modalContainer = document.querySelector('.modal-container');
        modalContainer.classList.add('hidden');
    }
</script>
