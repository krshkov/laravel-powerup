@extends('layouts.app')
@section('content')
    <div class="p-10 flex justify-center items-center">
        <button class="btn-main" id="themeSwitcher">Light/Dark mode</button>
    </div>

    <h4 class="color-main text-center font-bold italic underline underline-offset-8 hover:anim_scaleUp anim_moveUp">You
        can copy components from here and configure them based on your needs!</h4>

    <p class="text-center">If you want to turn off the shadow on any component use the class <span
            class="italic font-bold">hard-shadow-none</span></p>
    <p class="text-center">Working on the configuration, so you can change only in the config if you want shadows or
        not</p>

    {{-- Buttons --}}
    <div class="py-10 w-full">
        <h3 class="text-center lg:text-left">Buttons:</h3>
        <div class="mt-10 flex justify-center w-full">
            <div class="flex flex-col lg:flex-row lg:flex-wrap">
                <button class="m-2 block btn-main hoverable">main</button>
                <button class="m-2 block btn-success hoverable">success</button>
                <button class="m-2 block btn-danger tooltip">danger <span class="tooltip-text main">Without class hoverable</span>
                </button>
                <button class="m-2 block btn-warning hoverable">warning</button>
                <button class="m-2 block btn-info tooltip">info <span
                        class="tooltip-text main">Without class hoverable</span>
                </button>
                <button class="m-2 block btn-light hoverable">light</button>
                <button class="m-2 block btn-opposite hoverable">opposite</button>
            </div>
            <div class="flex flex-col lg:flex-row lg:flex-wrap">
                <button class="m-2 block btn-outline-main hoverable">main</button>
                <button class="m-2 block btn-outline-success hoverable">success</button>
                <button class="m-2 block btn-outline-danger tooltip">danger <span class="tooltip-text main">Without class hoverable</span>
                </button>
                <button class="m-2 block btn-outline-warning hoverable">warning</button>
                <button class="m-2 block btn-outline-info hoverable">info</button>
                <button class="m-2 block btn-outline-light tooltip">light <span class="tooltip-text main">Without class hoverable</span>
                </button>
                <button class="m-2 block btn-outline-opposite hoverable">opposite</button>
            </div>
        </div>
    </div>

    {{-- Alerts --}}
    <div class="py-10 w-full">
        <h3 class="text-center lg:text-left">Alerts:</h3>
        <div class="mt-10 flex justify-center flex-wrap">
            <div class="m-2 block alert-main">
                <div class="alert-header">
                    <h4 class="alert-title">Main</h4>
                </div>
                <div class="alert-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto autem beatae
                        consequuntur,
                        cumque, dolorum enim error fuga id laborum magni maiores natus nobis quaerat rem sed
                        temporibus
                        tenetur, voluptas!</p>
                </div>
            </div>
            <div class="m-2 block alert-success">
                <div class="alert-header">
                    <h4>Success</h4>
                </div>
                <div class="alert-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto autem beatae
                        consequuntur,
                        cumque, dolorum enim error fuga id laborum magni maiores natus nobis quaerat rem sed
                        temporibus
                        tenetur, voluptas!</p>
                </div>
            </div>
            <div class="m-2 block alert-danger">
                <div class="alert-header">
                    <h4>Danger</h4>
                </div>
                <div class="alert-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto autem beatae
                        consequuntur,
                        cumque, dolorum enim error fuga id laborum magni maiores natus nobis quaerat rem sed
                        temporibus
                        tenetur, voluptas!</p>
                </div>
            </div>
            <div class="m-2 block alert-warning">
                <div class="alert-header">
                    <h4>Warning</h4>
                </div>
                <div class="alert-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto autem beatae
                        consequuntur,
                        cumque, dolorum enim error fuga id laborum magni maiores natus nobis quaerat rem sed
                        temporibus
                        tenetur, voluptas!</p>
                </div>
            </div>
            <div class="m-2 block alert-info">
                <div class="alert-header">
                    <h4>Info</h4>
                </div>
                <div class="alert-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto autem beatae
                        consequuntur,
                        cumque, dolorum enim error fuga id laborum magni maiores natus nobis quaerat rem sed
                        temporibus
                        tenetur, voluptas!</p>
                </div>
            </div>
            <div class="m-2 block alert-light">
                <div class="alert-header">
                    <h4>Light</h4>
                </div>
                <div class="alert-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto autem beatae
                        consequuntur,
                        cumque, dolorum enim error fuga id laborum magni maiores natus nobis quaerat rem sed
                        temporibus
                        tenetur, voluptas!</p>
                </div>
            </div>
            <div class="m-2 block alert-opposite">
                <div class="alert-header">
                    <h4>Opposite</h4>
                </div>
                <div class="alert-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto autem beatae
                        consequuntur,
                        cumque, dolorum enim error fuga id laborum magni maiores natus nobis quaerat rem sed
                        temporibus
                        tenetur, voluptas!</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Cards --}}
    <div class="py-10 w-full">
        <h3 class="text-center lg:text-left">Cards:</h3>
        <div class="mt-10 flex flex-row flex-wrap justify-center gap-2">
            <div class="card-main">
                <div class="card-greeter"></div>
                <div class="card-header">
                    <img src="{{ url("https://fakeimg.pl/600x400/000000/C93030") }}" alt="Test Image">
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet facilis, placeat. A ab alias
                        dignissimos doloremque est illo laudantium maxime nam neque nesciunt non officia, optio,
                        quasi
                        repellat reprehenderit sint!</p>
                </div>
                <div class="card-footer">
                    <button class="hoverable btn-success">Okay</button>
                    <button class="hoverable btn-danger">No</button>
                </div>
            </div>
            <div class="card-opposite">
                <div class="card-greeter"></div>
                <div class="card-header">
                    <h2 class="color-main">Long title of the current card</h2>
                </div>
                <div class="card-body">
                    <p class="color-main">If you want to get rid of the text that is above the greeter add this code in
                        <span class="underline">cards.css</span> <span class="italic font-bold">.card-header > h2 { @apply pr-10;}</span>
                        <small class="block">Instead of h2 you can edit it in your needs.</small>
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet facilis, placeat. A ab
                        alias
                        dignissimos doloremque est illo laudantium maxime nam neque nesciunt non officia, optio,
                        quasi
                        repellat reprehenderit sint!</p>
                </div>
                <div class="card-footer">
                    <button class="hoverable btn-success">Okay</button>
                    <button class="hoverable btn-danger">No</button>
                </div>
            </div>
            <div class="card-success">
                <div class="card-greeter"></div>
                <div class="card-header">
                    <h2>Title of card</h2>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet facilis, placeat. A ab
                        alias
                        dignissimos doloremque est illo laudantium maxime nam neque nesciunt non officia, optio,
                        quasi
                        repellat reprehenderit sint!</p>
                </div>
                <div class="card-footer">
                    <button class="btn-success">Okay</button>
                    <button class="hoverable btn-danger">No</button>
                </div>
            </div>
            <div class="card-danger">
                <div class="card-greeter"></div>
                <div class="card-header">
                    <h2>Title of card</h2>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet facilis, placeat. A ab
                        alias
                        dignissimos doloremque est illo laudantium maxime nam neque nesciunt non officia, optio,
                        quasi
                        repellat reprehenderit sint!</p>
                </div>
                <div class="card-footer">
                    <button class="hoverable btn-success">Okay</button>
                    <button class="btn-danger">No</button>
                </div>
            </div>
            <div class="card-warning">
                <div class="card-greeter"></div>
                <div class="card-header">
                    <h2>Title of card</h2>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet facilis, placeat. A ab
                        alias
                        dignissimos doloremque est illo laudantium maxime nam neque nesciunt non officia, optio,
                        quasi
                        repellat reprehenderit sint!</p>
                </div>
                <div class="card-footer">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi, aspernatur eum
                        hic
                        itaque iure laudantium officia pariatur possimus praesentium quam sequi sunt tempore
                        voluptas voluptates! A accusamus commodi corporis?</p>
                </div>
            </div>
            <div class="card-info">
                <div class="card-greeter"></div>
                <div class="card-header">
                    <h2>Title of card</h2>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet facilis, placeat. A ab
                        alias
                        dignissimos doloremque est illo laudantium maxime nam neque nesciunt non officia, optio,
                        quasi
                        repellat reprehenderit sint!</p>
                </div>
                <div class="card-footer">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi, aspernatur eum
                        hic
                        itaque iure laudantium officia pariatur possimus praesentium quam sequi sunt tempore
                        voluptas voluptates! A accusamus commodi corporis?</p>
                </div>
            </div>
            <div class="card border-transparent">
                <div class="card-greeter"></div>
                <div class="card-header">
                    <img src="{{ url("https://fakeimg.pl/600x400/000000/C93030") }}" alt="Test Image">
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet facilis, placeat. A ab alias
                        dignissimos doloremque est illo laudantium maxime nam neque nesciunt non officia, optio,
                        quasi
                        repellat reprehenderit sint!</p>
                </div>
                <div class="card-footer">
                    <button class="hoverable btn-success">Okay</button>
                    <button class="hoverable btn-danger">No</button>
                </div>
            </div>
            <div class="card-warning">
                <div class="card-greeter"></div>
                <div class="card-header">
                    <h2>Title of card</h2>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet facilis, placeat. A ab
                        alias
                        dignissimos doloremque est illo laudantium maxime nam neque nesciunt non officia, optio,
                        quasi
                        repellat reprehenderit sint!</p>
                </div>
                <div class="card-footer">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi, aspernatur eum
                        hic
                        itaque iure laudantium officia pariatur possimus praesentium quam sequi sunt tempore
                        voluptas voluptates! A accusamus commodi corporis?</p>
                </div>
            </div>
            <div class="card-light">
                <div class="card-greeter"></div>
                <div class="card-header">
                    <h2>Title of card</h2>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet facilis, placeat. A ab
                        alias
                        dignissimos doloremque est illo laudantium maxime nam neque nesciunt non officia, optio,
                        quasi
                        repellat reprehenderit sint!</p>
                </div>
                <div class="card-footer">
                    <button class="hoverable btn-success">Okay</button>
                    <button class="hoverable btn-danger">No</button>
                </div>
            </div>
            <div class="card-info">
                <div class="card-greeter"></div>
                <div class="card-header">
                    <img src="{{ url("https://fakeimg.pl/600x200/000000/C93030") }}" alt="Test Image">
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet facilis, placeat. A ab
                        alias
                        dignissimos doloremque est illo laudantium maxime nam neque nesciunt non officia, optio,
                        quasi
                        repellat reprehenderit sint!</p>
                </div>
                <div class="card-footer">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi, aspernatur eum
                        hic
                        itaque iure laudantium officia pariatur possimus praesentium quam sequi sunt tempore
                        voluptas voluptates! A accusamus commodi corporis?</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Forms --}}
    <div class="py-10 w-full">
        <h3 class="text-center lg:text-left">Forms:</h3>
        <div class="mt-10 flex justify-center">
            <form class="flex flex-col w-full max-w-form lg:max-w-full lg:flex-row lg:justify-center lg:gap-32">
                <div>
                    <div class="input-group mt-4">
                        <label for="input">Text Input</label>
                        <input type="text" id="input" placeholder="Text">
                        <small class="input-mismatch">Err due input</small>
                    </div>
                    <div class="input-group mt-4">
                        <label for="input">Number Input</label>
                        <input type="number" id="input" placeholder="123..">
                        <small class="input-mismatch">Err due input</small>
                    </div>
                    <div class="input-group mt-4">
                        <label for="input">File Input</label>
                        <input type="file" id="input">
                        <small class="input-mismatch">Err due input</small>
                    </div>
                    <div class="input-group mt-4">
                        <label for="input">Date Input</label>
                        <input type="date" id="input">
                        <small class="input-mismatch">Err due input</small>
                    </div>
                    <div class="input-group mt-4 w-[100px]">
                        <label for="input">Time Input</label>
                        <input type="time" id="input">
                        <small class="input-mismatch">Err due input</small>
                    </div>
                    <div class="input-group mt-4 w-[200px]">
                        <label for="input">DateTime Input</label>
                        <input type="datetime-local" id="input">
                        <small class="input-mismatch">Err due input</small>
                    </div>
                    <div class="input-group mt-4">
                        <label for="input">Input Icon</label>
                        <div class="input-icon-group">
                            <x-vaadin-user class="input-icon"/>
                            <input type="text" id="input">
                        </div>
                        <small class="input-mismatch">Err due input</small>
                    </div>
                </div>
                <div>
                    <div class="input-inline-group mt-4">
                        <label for="input">Color Input</label>
                        <input type="color" id="input">
                        <small class="input-mismatch">Err due input</small>
                    </div>
                    <div class="input-group mt-4">
                        <label for="input">Range Input</label>
                        <input type="range" id="input">
                        <small class="input-mismatch">Err due input</small>
                    </div>
                    <div class="input-group mt-4">
                        <label for="input">Select Icon</label>
                        <div class="input-icon-group">
                            <x-vaadin-fire class="input-icon"/>
                            <select id="input">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">Four</option>
                                <option value="5">Five</option>
                            </select>
                        </div>
                        <small class="input-mismatch">Err due input</small>
                    </div>
                    <div class="input-inline-group mt-4">
                        <label for="input">Radio Input</label>
                        <input type="radio" id="input" name="input" checked>
                        <input type="radio" id="input" name="input">
                        <small class="input-mismatch">Err due input</small>
                    </div>
                    <div class="input-inline-group mt-4">
                        <label for="input">Checkbox Input</label>
                        <input type="checkbox" id="input">
                        <input type="checkbox" id="input" checked>
                        <small class="input-mismatch">Err due input</small>
                    </div>
                    <div class="input-group mt-4">
                        <label for="input">Textarea</label>
                        <textarea id="input" cols="30" rows="10" placeholder="Something..."></textarea>
                        <small class="input-mismatch">Err due input</small>
                    </div>
                    <div class="input-group mt-4">
                        <label for="input">Input Icon</label>
                        <div class="input-icon-group">
                            <x-vaadin-fire class="input-icon"/>
                            <input type="text" id="input">
                        </div>
                        <small class="input-mismatch">Err due input</small>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- Typography --}}
    <div class="py-10 w-full">
        <h3 class="text-center lg:text-left">Typography:</h3>
        <div class="flex flex-col md:flex-row md:justify-around">
            <div class="mt-10 lg:pl-20">
                <p class="font-bold">Playfair Display</p>
                <hr>
                <h1>Heading 1</h1>
                <h2>Heading 2</h2>
                <h3>Heading 3</h3>
                <h4>Heading 4</h4>
                <h5>Heading 5</h5>
                <h6>Heading 6</h6>
                <p>Plain text. Paragraph</p>
                <a href="#">Plain text. Anchor. Link.</a><br>
                <a href="#" class="text-red-600">Plain text. Anchor. Link. Active.</a>
            </div>
            <div class="mt-10 lg:pl-20">
                <p class="font-bold">Nunito</p>
                <hr>
                <h1 class="font-second">Heading 1</h1>
                <h2 class="font-second">Heading 2</h2>
                <h3 class="font-second">Heading 3</h3>
                <h4 class="font-second">Heading 4</h4>
                <h5 class="font-second">Heading 5</h5>
                <h6 class="font-second">Heading 6</h6>
                <p class="font-second"> Plain text. Paragraph</p>
                <a class="font-second" href="#">Plain text. Anchor. Link.</a><br>
                <a href="#" class="text-red-600 font-second">Plain text. Anchor. Link. Active.</a>
            </div>
        </div>
    </div>

    {{-- Badges --}}
    <div class="py-10 w-full">
        <h3 class="text-center">Badges:</h3>
        <div class="mt-10">
            <p class="flex flex-wrap justify-center items-center gap-2 mt-6">
                <span class="font-bold mr-9">Pills:</span>
                <span class="pill-main">main</span>
                <span class="pill-success">success</span>
                <span class="pill-danger">danger</span>
                <span class="pill-warning">warning</span>
                <span class="pill-info">info</span>
                <span class="pill-light">light</span>
                <span class="pill-opposite">opposite</span>
            </p>
            <div class="flex flex-wrap justify-center items-center mt-6">
                <p class="font-bold mr-9">Badges:</p>
                <div class="badge-group">
                    <div class="badge-main">5</div>
                    <div class="body">
                        <button class="hoverable btn-light">click</button>
                    </div>
                </div>
                <div class="badge-group">
                    <div class="badge-success">5</div>
                    <div class="body">
                        <button class="hoverable btn-opposite">notifications</button>
                    </div>
                </div>
                <div class="badge-group">
                    <div class="badge-danger">5</div>
                    <div class="body">
                        <button class="hoverable btn-success">open</button>
                    </div>
                </div>
                <div class="badge-group">
                    <div class="badge-warning">5</div>
                    <div class="body">
                        <button class="hoverable btn-info">read</button>
                    </div>
                </div>
                <div class="badge-group">
                    <div class="badge-info">5</div>
                    <div class="body">
                        <button class="hoverable btn-success">success</button>
                    </div>
                </div>
                <div class="badge-group">
                    <div class="badge-light">5</div>
                    <div class="body">
                        <button class="hoverable btn-opposite">close</button>
                    </div>
                </div>
                <div class="badge-group">
                    <div class="badge-opposite">5</div>
                    <div class="body">
                        <button class="hoverable btn-main">check</button>
                    </div>
                </div>
                <div class="badge-group">
                    <div class="badge-opposite">5</div>
                    <div class="body">
                        <p class="font-bold">Notifications</p>
                    </div>
                </div>
                <div class="badge-group">
                    <div class="badge-opposite">5</div>
                    <div class="body">
                        <a class="font-bold">Notifications</a>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap justify-center items-center mt-6">
                <p class="font-bold mr-9">Dots:</p>
                <div class="dot-group">
                    <div class="dot-main dot-to-success"></div>
                    <div class="body">
                        <button class="btn-light">click</button>
                    </div>
                </div>
                <div class="dot-group">
                    <div class="dot-success dot-to-main"></div>
                    <div class="body">
                        <button class="btn-opposite">notifications</button>
                    </div>
                </div>
                <div class="dot-group">
                    <div class="dot-danger dot-to-warning"></div>
                    <div class="body">
                        <button class="btn-success">open</button>
                    </div>
                </div>
                <div class="dot-group">
                    <div class="dot-warning dot-to-info"></div>
                    <div class="body">
                        <button class="btn-info">read</button>
                    </div>
                </div>
                <div class="dot-group">
                    <div class="dot-info dot-to-opposite"></div>
                    <div class="body">
                        <button class="btn-success">success</button>
                    </div>
                </div>
                <div class="dot-group">
                    <div class="dot-light dot-to-danger"></div>
                    <div class="body">
                        <button class="btn-opposite">close</button>
                    </div>
                </div>
                <div class="dot-group">
                    <div class="dot-opposite dot-to-main"></div>
                    <div class="body">
                        <button class="btn-main btn-no-hover">check</button>
                    </div>
                </div>
                <div class="dot-group">
                    <div class="dot-opposite dot-to-main"></div>
                    <div class="body">
                        <p class="font-bold">Notifications</p>
                    </div>
                </div>
            </div>
            <small class="block text-center color-main">Click to see the dot changing. This can be used as switch
                also.</small>
        </div>
    </div>

    {{-- Icons --}}
    <div class="py-10 w-full">
        <h3 class="text-center">Icons:</h3>
        <div class="mt-10 flex flex-wrap justify-center gap-12 mb-4">
            <x-akar-bluetooth width="40px" class="color-info"/>
            <x-akar-light-bulb width="40px" class="color-warning"/>
            <x-akar-data width="40px" class="color-main"/>
            <x-akar-location width="40px" class="color-success"/>
            <x-akar-thumbs-up width="40px" class="color-light"/>
            <x-akar-instagram-fill width="40px" class="color-info"/>
            <x-akar-facebook-fill width="40px" class="color-opposite"/>
            <x-akar-circle-x width="40px" class="color-main"/>
        </div>
        <small class="font-bold block text-center mt-10">
            <a href="https://blade-ui-kit.com/blade-icons?set=50" target="_blank">Akar Icons Pack</a>
        </small>
        <small class="font-bold block text-center mt-2">
            <a href="https://blade-ui-kit.com/blade-icons?set=28" target="_blank">Vaadin Icons</a>
        </small>
        <small class="text-center block mt-3 color-main">Click the links above to discover the class names!</small>
    </div>

    {{-- Modals --}}
    <div class="py-10 w-full">
        <h3 class="text-center lg:text-left">Modals:</h3>
        <small class="color-main font-bold">Please click the Main Modal and read. This is a proof that you can send
            content to modals, from the backend</small>
        <div class="mt-10 flex flex-wrap justify-center lg:justify-start gap-2">
            <button class="hoverable btn-main modal-on modal-of-main" data-content="{{ $modal_content ?? '' }}">Main
                Modal
            </button>
            <button class="hoverable btn-success modal-on modal-of-success">Success Modal</button>
            <button class="hoverable btn-danger modal-on modal-of-danger">Danger Modal</button>
            <button class="hoverable btn-warning modal-on modal-of-warning">Warning Modal</button>
            <button class="hoverable btn-info modal-on modal-of-info">Info Modal</button>
            <button class="hoverable btn-light modal-on modal-of-light">Light Modal</button>
            <button class="hoverable btn-opposite modal-on modal-of-opposite">Opposite Modal</button>
        </div>
        <div class="mt-6 flex flex-wrap">
            <div class="lg:flex lg:gap-12">
                <div class="modal-main modal-component-example">
                    <div class="modal-header">
                        <h3>Modal Example Title</h3>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt laboriosam numquam
                            perferendis quo veritatis. Dolor esse fugit illum molestias officia porro. Atque doloribus
                            est et laborum magni natus quis quo.</p>
                        <form>
                            <div class="input-group {{--w-1/2--}} mt-5">
                                <label for="input">Input</label>
                                <input type="text" id="input">
                            </div>
                            <button class="hoverable btn-main mt-3">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="modal-success modal-component-example">
                    <div class="modal-header">
                        <h3>Modal Example Title</h3>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt laboriosam numquam
                            perferendis
                            quo
                            veritatis. Dolor esse fugit illum molestias officia porro. Atque doloribus est et laborum
                            magni
                            natus quis quo.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt laboriosam numquam
                            perferendis
                            quo
                            veritatis. Dolor esse fugit illum molestias officia porro. Atque doloribus est et laborum
                            magni
                            natus quis quo.</p>

                        <button class="hoverable btn-success mt-4">OK</button>
                        <button class="hoverable btn-info mt-4">Cancel</button>
                    </div>
                </div>
            </div>
            <div class="lg:flex lg:gap-12">
                <div class="modal-danger modal-component-example">
                    <div class="modal-header">
                        <h3>Modal Example Title</h3>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt laboriosam numquam
                            perferendis
                            quo
                            veritatis. Dolor esse fugit illum molestias officia porro. Atque doloribus est et laborum
                            magni
                            natus quis quo.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt laboriosam numquam
                            perferendis
                            quo
                            veritatis. Dolor esse fugit illum molestias officia porro. Atque doloribus est et laborum
                            magni
                            natus quis quo.</p>

                        <button class="hoverable btn-success mt-4">OK</button>
                        <button class="hoverable btn-info mt-4">Cancel</button>
                    </div>
                </div>
                <div class="modal-warning modal-component-example">
                    <div class="modal-header">
                        <h3>Modal Example Title</h3>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt laboriosam numquam
                            perferendis
                            quo
                            veritatis. Dolor esse fugit illum molestias officia porro. Atque doloribus est et laborum
                            magni
                            natus quis quo.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt laboriosam numquam
                            perferendis
                            quo
                            veritatis. Dolor esse fugit illum molestias officia porro. Atque doloribus est et laborum
                            magni
                            natus quis quo.</p>

                        <button class="hoverable btn-success mt-4">OK</button>
                        <button class="hoverable btn-info mt-4">Cancel</button>
                    </div>
                </div>
            </div>
            <div class="lg:flex lg:gap-12">
                <div class="modal-info modal-component-example">
                    <div class="modal-header">
                        <h3>Modal Example Title</h3>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt laboriosam numquam
                            perferendis
                            quo
                            veritatis. Dolor esse fugit illum molestias officia porro. Atque doloribus est et laborum
                            magni
                            natus quis quo.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt laboriosam numquam
                            perferendis
                            quo
                            veritatis. Dolor esse fugit illum molestias officia porro. Atque doloribus est et laborum
                            magni
                            natus quis quo.</p>

                        <button class="hoverable btn-success mt-4">OK</button>
                        <button class="hoverable btn-info mt-4">Cancel</button>
                    </div>
                </div>
                <div class="modal-light modal-component-example">
                    <div class="modal-header">
                        <h3>Modal Example Title</h3>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt laboriosam numquam
                            perferendis
                            quo
                            veritatis. Dolor esse fugit illum molestias officia porro. Atque doloribus est et laborum
                            magni
                            natus quis quo.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt laboriosam numquam
                            perferendis
                            quo
                            veritatis. Dolor esse fugit illum molestias officia porro. Atque doloribus est et laborum
                            magni
                            natus quis quo.</p>

                        <button class="hoverable btn-success mt-4">OK</button>
                        <button class="hoverable btn-info mt-4">Cancel</button>
                    </div>
                </div>
            </div>
            <div class="modal-opposite modal-component-example">
                <div class="modal-header">
                    <h3>Modal Example Title</h3>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt laboriosam numquam
                        perferendis
                        quo
                        veritatis. Dolor esse fugit illum molestias officia porro. Atque doloribus est et laborum
                        magni
                        natus quis quo.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt laboriosam numquam
                        perferendis
                        quo
                        veritatis. Dolor esse fugit illum molestias officia porro. Atque doloribus est et laborum
                        magni
                        natus quis quo.</p>

                    <button class="hoverable btn-success mt-4">OK</button>
                    <button class="hoverable btn-info mt-4">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Tables --}}
    <div class="py-10 w-full">
        <h3>Tables:</h3>
        <div class="mt-10">
            <table class="mt-4 table-success table-strip-success table-hover">
                <tr>
                    <th>Company</th>
                    <th>Contact</th>
                    <th>Country</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>Ernst Handel</td>
                    <td>Roland Mendel</td>
                    <td>Austria</td>
                </tr>
                <tr>
                    <td>Island Trading</td>
                    <td>Helen Bennett</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>Laughing Bacchus Winecellars</td>
                    <td>Yoshi Tannamuri</td>
                    <td>Canada</td>
                </tr>
                <tr>
                    <td>Magazzini Alimentari Riuniti</td>
                    <td>Giovanni Rovelli</td>
                    <td>Italy</td>
                </tr>
            </table>
            <table class="mt-4 table-danger table-strip-danger table-hover">
                <tr>
                    <th>Company</th>
                    <th>Contact</th>
                    <th>Country</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>Ernst Handel</td>
                    <td>Roland Mendel</td>
                    <td>Austria</td>
                </tr>
                <tr>
                    <td>Island Trading</td>
                    <td>Helen Bennett</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>Laughing Bacchus Winecellars</td>
                    <td>Yoshi Tannamuri</td>
                    <td>Canada</td>
                </tr>
                <tr>
                    <td>Magazzini Alimentari Riuniti</td>
                    <td>Giovanni Rovelli</td>
                    <td>Italy</td>
                </tr>
            </table>
            <table class="mt-4 table-warning table-strip-warning table-borderless table-hover">
                <tr>
                    <th>Company</th>
                    <th>Contact</th>
                    <th>Country</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>Ernst Handel</td>
                    <td>Roland Mendel</td>
                    <td>Austria</td>
                </tr>
                <tr>
                    <td>Island Trading</td>
                    <td>Helen Bennett</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>Laughing Bacchus Winecellars</td>
                    <td>Yoshi Tannamuri</td>
                    <td>Canada</td>
                </tr>
                <tr>
                    <td>Magazzini Alimentari Riuniti</td>
                    <td>Giovanni Rovelli</td>
                    <td>Italy</td>
                </tr>
            </table>
            <table class="mt-4 table-info table-strip-info table-hover">
                <tr>
                    <th>Company</th>
                    <th>Contact</th>
                    <th>Country</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>Ernst Handel</td>
                    <td>Roland Mendel</td>
                    <td>Austria</td>
                </tr>
                <tr>
                    <td>Island Trading</td>
                    <td>Helen Bennett</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>Laughing Bacchus Winecellars</td>
                    <td>Yoshi Tannamuri</td>
                    <td>Canada</td>
                </tr>
                <tr>
                    <td>Magazzini Alimentari Riuniti</td>
                    <td>Giovanni Rovelli</td>
                    <td>Italy</td>
                </tr>
            </table>
            <table class="mt-4 table-light table-strip-light table-hover">
                <tr>
                    <th>Company</th>
                    <th>Contact</th>
                    <th>Country</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>Ernst Handel</td>
                    <td>Roland Mendel</td>
                    <td>Austria</td>
                </tr>
                <tr>
                    <td>Island Trading</td>
                    <td>Helen Bennett</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>Laughing Bacchus Winecellars</td>
                    <td>Yoshi Tannamuri</td>
                    <td>Canada</td>
                </tr>
                <tr>
                    <td>Magazzini Alimentari Riuniti</td>
                    <td>Giovanni Rovelli</td>
                    <td>Italy</td>
                </tr>
            </table>
            <table class="mt-4 table-opposite table-strip-opposite table-borderless table-hover">
                <tr>
                    <th>Company</th>
                    <th>Contact</th>
                    <th>Country</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                </tr>
                <tr>
                    <td>Ernst Handel</td>
                    <td>Roland Mendel</td>
                    <td>Austria</td>
                </tr>
                <tr>
                    <td>Island Trading</td>
                    <td>Helen Bennett</td>
                    <td>UK</td>
                </tr>
                <tr>
                    <td>Laughing Bacchus Winecellars</td>
                    <td>Yoshi Tannamuri</td>
                    <td>Canada</td>
                </tr>
                <tr>
                    <td>Magazzini Alimentari Riuniti</td>
                    <td>Giovanni Rovelli</td>
                    <td>Italy</td>
                </tr>
            </table>
            <div class="overflow-x-auto">
                <table class="mt-8 table-main table-strip-main table-borderless table-hover">
                    <tr>
                        <th>ID</th>
                        <th>Status</th>
                        <th>First Name</th>
                        <th>Father Name</th>
                        <th>Last Name</th>
                        <th>Born</th>
                        <th>IMBG</th>
                        <th>Driving Licence</th>
                        <th>Gun Licence</th>
                        <th>Elite Coin</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td class="flex items-center">
                            <x-akar-double-sword width="20px"/>
                            <span class="font-bold">Elite</span>
                            <x-akar-double-sword width="20px"/>
                        </td>
                        <td>Stole</td>
                        <td>Mitko</td>
                        <td>Krshkov</td>
                        <td>2003</td>
                        <td>1408003460021</td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td class="flex items-center gap-x-3">
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-pointer width="26px" class="color-success hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-thumbs-down-o width="26px" class="color-opposite hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-exclamation-circle-o width="26px"
                                                                   class="color-warning hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-akar-paper-airplane width="26px" class="color-info hover:anim_moveUp"/>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td class="flex items-center">
                            <x-akar-double-sword width="20px"/>
                            <span class="font-bold">Elite</span>
                            <x-akar-double-sword width="20px"/>
                        </td>
                        <td>Stole</td>
                        <td>Mitko</td>
                        <td>Krshkov</td>
                        <td>2003</td>
                        <td>1408003460021</td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td class="flex items-center gap-x-3">
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-pointer width="26px" class="color-success hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-thumbs-down-o width="26px" class="color-opposite hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-exclamation-circle-o width="26px"
                                                                   class="color-warning hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-akar-paper-airplane width="26px" class="color-info hover:anim_moveUp"/>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td class="flex items-center">
                            <x-akar-double-sword width="20px"/>
                            <span class="font-bold">Elite</span>
                            <x-akar-double-sword width="20px"/>
                        </td>
                        <td>Stole</td>
                        <td>Mitko</td>
                        <td>Krshkov</td>
                        <td>2003</td>
                        <td>1408003460021</td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td class="flex items-center gap-x-3">
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-pointer width="26px" class="color-success hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-thumbs-down-o width="26px" class="color-opposite hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-exclamation-circle-o width="26px"
                                                                   class="color-warning hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-akar-paper-airplane width="26px" class="color-info hover:anim_moveUp"/>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td class="flex items-center">
                            <x-akar-double-sword width="20px"/>
                            <span class="font-bold">Elite</span>
                            <x-akar-double-sword width="20px"/>
                        </td>
                        <td>Stole</td>
                        <td>Mitko</td>
                        <td>Krshkov</td>
                        <td>2003</td>
                        <td>1408003460021</td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td class="flex items-center gap-x-3">
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-pointer width="26px" class="color-success hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-thumbs-down-o width="26px" class="color-opposite hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-exclamation-circle-o width="26px"
                                                                   class="color-warning hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-akar-paper-airplane width="26px" class="color-info hover:anim_moveUp"/>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td class="flex items-center">
                            <x-akar-double-sword width="20px"/>
                            <span class="font-bold">Elite</span>
                            <x-akar-double-sword width="20px"/>
                        </td>
                        <td>Stole</td>
                        <td>Mitko</td>
                        <td>Krshkov</td>
                        <td>2003</td>
                        <td>1408003460021</td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td class="flex items-center gap-x-3">
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-pointer width="26px" class="color-success hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-thumbs-down-o width="26px" class="color-opposite hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-exclamation-circle-o width="26px"
                                                                   class="color-warning hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-akar-paper-airplane width="26px" class="color-info hover:anim_moveUp"/>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td class="flex items-center">
                            <x-akar-double-sword width="20px"/>
                            <span class="font-bold">Elite</span>
                            <x-akar-double-sword width="20px"/>
                        </td>
                        <td>Stole</td>
                        <td>Mitko</td>
                        <td>Krshkov</td>
                        <td>2003</td>
                        <td>1408003460021</td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td class="flex items-center gap-x-3">
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-pointer width="26px" class="color-success hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-thumbs-down-o width="26px" class="color-opposite hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-exclamation-circle-o width="26px"
                                                                   class="color-warning hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-akar-paper-airplane width="26px" class="color-info hover:anim_moveUp"/>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td class="flex items-center">
                            <x-akar-double-sword width="20px"/>
                            <span class="font-bold">Elite</span>
                            <x-akar-double-sword width="20px"/>
                        </td>
                        <td>Stole</td>
                        <td>Mitko</td>
                        <td>Krshkov</td>
                        <td>2003</td>
                        <td>1408003460021</td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td class="flex items-center gap-x-3">
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-pointer width="26px" class="color-success hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-thumbs-down-o width="26px" class="color-opposite hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-exclamation-circle-o width="26px"
                                                                   class="color-warning hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-akar-paper-airplane width="26px" class="color-info hover:anim_moveUp"/>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td class="flex items-center">
                            <x-akar-double-sword width="20px"/>
                            <span class="font-bold">Elite</span>
                            <x-akar-double-sword width="20px"/>
                        </td>
                        <td>Stole</td>
                        <td>Mitko</td>
                        <td>Krshkov</td>
                        <td>2003</td>
                        <td>1408003460021</td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td class="flex items-center gap-x-3">
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-pointer width="26px" class="color-success hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-thumbs-down-o width="26px" class="color-opposite hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-exclamation-circle-o width="26px"
                                                                   class="color-warning hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-akar-paper-airplane width="26px" class="color-info hover:anim_moveUp"/>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td class="flex items-center">
                            <x-akar-double-sword width="20px"/>
                            <span class="font-bold">Elite</span>
                            <x-akar-double-sword width="20px"/>
                        </td>
                        <td>Stole</td>
                        <td>Mitko</td>
                        <td>Krshkov</td>
                        <td>2003</td>
                        <td>1408003460021</td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td class="flex items-center gap-x-3">
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-pointer width="26px" class="color-success hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-thumbs-down-o width="26px" class="color-opposite hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-exclamation-circle-o width="26px"
                                                                   class="color-warning hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-akar-paper-airplane width="26px" class="color-info hover:anim_moveUp"/>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td class="flex items-center">
                            <x-akar-double-sword width="20px"/>
                            <span class="font-bold">Elite</span>
                            <x-akar-double-sword width="20px"/>
                        </td>
                        <td>Stole</td>
                        <td>Mitko</td>
                        <td>Krshkov</td>
                        <td>2003</td>
                        <td>1408003460021</td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td>
                            <x-akar-check width="20px" class="color-success"/>
                        </td>
                        <td class="flex items-center gap-x-3">
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-pointer width="26px" class="color-success hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-thumbs-down-o width="26px" class="color-opposite hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-vaadin-exclamation-circle-o width="26px"
                                                                   class="color-warning hover:anim_moveUp"/>
                                </button>
                            </form>
                            <form {{--action="#" method="POST"--}}>
                                @csrf
                                @method('POST')
                                <button type="{{--submit--}}button">
                                    <x-akar-paper-airplane width="26px" class="color-info hover:anim_moveUp"/>
                                </button>
                            </form>
                        </td>
                    </tr>
                </table>
                <small class="color-main">scroll on the y axis</small>
            </div>

            {{-- Mobile Table Records --}}
            <div class="my-28 ">
                <h4>Mobile Table Records:</h4>
                <div class="mt-8 flex flex-wrap justify-around items-center gap-16">

                    <div class="shadow-2xl rounded-2xl shadow-main p-8 w-full lg:max-w-[40%]">
                        <div class="flex items-center gap-x-8 md:gap-x-24">
                            <h4 class="font-bold"><span class="italic">ID:</span> <span class="color-main">11</span>
                            </h4>
                            <p class="flex items-center"><span class="mr-4">Status:</span>
                                <x-akar-double-sword width="20px"/>
                                <span class="font-bold">Elite</span>
                                <x-akar-double-sword width="20px"/>
                            </p>
                        </div>
                        <div class="w-full mt-4 flex items-center flex-wrap gap-x-16 gap-y-6">
                            <p>First Name: <span class="font-bold">Stole</span></p>
                            <p>Father Name: <span class="font-bold">Mitko</span></p>
                            <p>Last Name: <span class="font-bold">Krshkov</span></p>
                            <p>Born: <span class="font-bold">2003</span></p>
                        </div>
                        <div class="w-full mt-4 flex items-center flex-wrap gap-x-8 md:gap-x-24">
                            <h5>IMBG: <span class="font-bold">1408003460021</span></h5>
                        </div>
                        <div class="w-full mt-4 flex items-center flex-wrap gap-x-16 gap-y-6">
                            <p class="flex items-center gap-x-4">Driving Licence: <span class="font-bold"><x-akar-check
                                        width="20px" class="color-success"/></span></p>
                            <p class="flex items-center gap-x-4">Gun Licence: <span class="font-bold"><x-akar-check
                                        width="20px" class="color-success"/></span></p>
                            <p class="flex items-center gap-x-4">Elite Coin: <span class="font-bold"><x-akar-check
                                        width="20px" class="color-success"/></span></p>
                        </div>
                        <div class="w-full mt-4">
                            <h6 class="font-bold italic">Actions:</h6>
                            <div class="mt-3 flex flex-wrap items-center gap-x-16 gap-y-6">
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-success hoverable">Hire</button>
                                </form>
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-opposite">Ignore</button>
                                </form>
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-danger">Report</button>
                                </form>
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-outline-info hoverable">Message
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="shadow-2xl rounded-2xl shadow-main p-8 w-full lg:max-w-[40%]">
                        <div class="flex items-center gap-x-8 md:gap-x-24">
                            <h4 class="font-bold"><span class="italic">ID:</span> <span class="color-main">11</span>
                            </h4>
                            <p class="flex items-center"><span class="mr-4">Status:</span>
                                <x-akar-double-sword width="20px"/>
                                <span class="font-bold">Elite</span>
                                <x-akar-double-sword width="20px"/>
                            </p>
                        </div>
                        <div class="w-full mt-4 flex items-center flex-wrap gap-x-16 gap-y-6">
                            <p>First Name: <span class="font-bold">Stole</span></p>
                            <p>Father Name: <span class="font-bold">Mitko</span></p>
                            <p>Last Name: <span class="font-bold">Krshkov</span></p>
                            <p>Born: <span class="font-bold">2003</span></p>
                        </div>
                        <div class="w-full mt-4 flex items-center flex-wrap gap-x-8 md:gap-x-24">
                            <h5>IMBG: <span class="font-bold">1408003460021</span></h5>
                        </div>
                        <div class="w-full mt-4 flex items-center flex-wrap gap-x-16 gap-y-6">
                            <p class="flex items-center gap-x-4">Driving Licence: <span class="font-bold"><x-akar-check
                                        width="20px" class="color-success"/></span></p>
                            <p class="flex items-center gap-x-4">Gun Licence: <span class="font-bold"><x-akar-check
                                        width="20px" class="color-success"/></span></p>
                            <p class="flex items-center gap-x-4">Elite Coin: <span class="font-bold"><x-akar-check
                                        width="20px" class="color-success"/></span></p>
                        </div>
                        <div class="w-full mt-4">
                            <h6 class="font-bold italic">Actions:</h6>
                            <div class="mt-3 flex flex-wrap items-center gap-x-16 gap-y-6">
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-success hoverable">Hire</button>
                                </form>
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-opposite">Ignore</button>
                                </form>
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-danger">Report</button>
                                </form>
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-outline-info hoverable">Message
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="shadow-2xl rounded-2xl shadow-main p-8 w-full lg:max-w-[40%]">
                        <div class="flex items-center gap-x-8 md:gap-x-24">
                            <h4 class="font-bold"><span class="italic">ID:</span> <span class="color-main">11</span>
                            </h4>
                            <p class="flex items-center"><span class="mr-4">Status:</span>
                                <x-akar-double-sword width="20px"/>
                                <span class="font-bold">Elite</span>
                                <x-akar-double-sword width="20px"/>
                            </p>
                        </div>
                        <div class="w-full mt-4 flex items-center flex-wrap gap-x-16 gap-y-6">
                            <p>First Name: <span class="font-bold">Stole</span></p>
                            <p>Father Name: <span class="font-bold">Mitko</span></p>
                            <p>Last Name: <span class="font-bold">Krshkov</span></p>
                            <p>Born: <span class="font-bold">2003</span></p>
                        </div>
                        <div class="w-full mt-4 flex items-center flex-wrap gap-x-8 md:gap-x-24">
                            <h5>IMBG: <span class="font-bold">1408003460021</span></h5>
                        </div>
                        <div class="w-full mt-4 flex items-center flex-wrap gap-x-16 gap-y-6">
                            <p class="flex items-center gap-x-4">Driving Licence: <span class="font-bold"><x-akar-check
                                        width="20px" class="color-success"/></span></p>
                            <p class="flex items-center gap-x-4">Gun Licence: <span class="font-bold"><x-akar-check
                                        width="20px" class="color-success"/></span></p>
                            <p class="flex items-center gap-x-4">Elite Coin: <span class="font-bold"><x-akar-check
                                        width="20px" class="color-success"/></span></p>
                        </div>
                        <div class="w-full mt-4">
                            <h6 class="font-bold italic">Actions:</h6>
                            <div class="mt-3 flex flex-wrap items-center gap-x-16 gap-y-6">
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-success hoverable">Hire</button>
                                </form>
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-opposite">Ignore</button>
                                </form>
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-danger">Report</button>
                                </form>
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-outline-info hoverable">Message
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="shadow-2xl rounded-2xl shadow-main p-8 w-full lg:max-w-[40%]">
                        <div class="flex items-center gap-x-8 md:gap-x-24">
                            <h4 class="font-bold"><span class="italic">ID:</span> <span class="color-main">11</span>
                            </h4>
                            <p class="flex items-center"><span class="mr-4">Status:</span>
                                <x-akar-double-sword width="20px"/>
                                <span class="font-bold">Elite</span>
                                <x-akar-double-sword width="20px"/>
                            </p>
                        </div>
                        <div class="w-full mt-4 flex items-center flex-wrap gap-x-16 gap-y-6">
                            <p>First Name: <span class="font-bold">Stole</span></p>
                            <p>Father Name: <span class="font-bold">Mitko</span></p>
                            <p>Last Name: <span class="font-bold">Krshkov</span></p>
                            <p>Born: <span class="font-bold">2003</span></p>
                        </div>
                        <div class="w-full mt-4 flex items-center flex-wrap gap-x-8 md:gap-x-24">
                            <h5>IMBG: <span class="font-bold">1408003460021</span></h5>
                        </div>
                        <div class="w-full mt-4 flex items-center flex-wrap gap-x-16 gap-y-6">
                            <p class="flex items-center gap-x-4">Driving Licence: <span class="font-bold"><x-akar-check
                                        width="20px" class="color-success"/></span></p>
                            <p class="flex items-center gap-x-4">Gun Licence: <span class="font-bold"><x-akar-check
                                        width="20px" class="color-success"/></span></p>
                            <p class="flex items-center gap-x-4">Elite Coin: <span class="font-bold"><x-akar-check
                                        width="20px" class="color-success"/></span></p>
                        </div>
                        <div class="w-full mt-4">
                            <h6 class="font-bold italic">Actions:</h6>
                            <div class="mt-3 flex flex-wrap items-center gap-x-16 gap-y-6">
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-success hoverable">Hire</button>
                                </form>
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-opposite">Ignore</button>
                                </form>
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-danger">Report</button>
                                </form>
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-outline-info hoverable">Message
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="shadow-2xl rounded-2xl shadow-main p-8 w-full lg:max-w-[40%]">
                        <div class="flex items-center gap-x-8 md:gap-x-24">
                            <h4 class="font-bold"><span class="italic">ID:</span> <span class="color-main">11</span>
                            </h4>
                            <p class="flex items-center"><span class="mr-4">Status:</span>
                                <x-akar-double-sword width="20px"/>
                                <span class="font-bold">Elite</span>
                                <x-akar-double-sword width="20px"/>
                            </p>
                        </div>
                        <div class="w-full mt-4 flex items-center flex-wrap gap-x-16 gap-y-6">
                            <p>First Name: <span class="font-bold">Stole</span></p>
                            <p>Father Name: <span class="font-bold">Mitko</span></p>
                            <p>Last Name: <span class="font-bold">Krshkov</span></p>
                            <p>Born: <span class="font-bold">2003</span></p>
                        </div>
                        <div class="w-full mt-4 flex items-center flex-wrap gap-x-8 md:gap-x-24">
                            <h5>IMBG: <span class="font-bold">1408003460021</span></h5>
                        </div>
                        <div class="w-full mt-4 flex items-center flex-wrap gap-x-16 gap-y-6">
                            <p class="flex items-center gap-x-4">Driving Licence: <span class="font-bold"><x-akar-check
                                        width="20px" class="color-success"/></span></p>
                            <p class="flex items-center gap-x-4">Gun Licence: <span class="font-bold"><x-akar-check
                                        width="20px" class="color-success"/></span></p>
                            <p class="flex items-center gap-x-4">Elite Coin: <span class="font-bold"><x-akar-check
                                        width="20px" class="color-success"/></span></p>
                        </div>
                        <div class="w-full mt-4">
                            <h6 class="font-bold italic">Actions:</h6>
                            <div class="mt-3 flex flex-wrap items-center gap-x-16 gap-y-6">
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-success hoverable">Hire</button>
                                </form>
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-opposite">Ignore</button>
                                </form>
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-danger">Report</button>
                                </form>
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-outline-info hoverable">Message
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="shadow-2xl rounded-2xl shadow-main p-8 w-full lg:max-w-[40%]">
                        <div class="flex items-center gap-x-8 md:gap-x-24">
                            <h4 class="font-bold"><span class="italic">ID:</span> <span class="color-main">11</span>
                            </h4>
                            <p class="flex items-center"><span class="mr-4">Status:</span>
                                <x-akar-double-sword width="20px"/>
                                <span class="font-bold">Elite</span>
                                <x-akar-double-sword width="20px"/>
                            </p>
                        </div>
                        <div class="w-full mt-4 flex items-center flex-wrap gap-x-16 gap-y-6">
                            <p>First Name: <span class="font-bold">Stole</span></p>
                            <p>Father Name: <span class="font-bold">Mitko</span></p>
                            <p>Last Name: <span class="font-bold">Krshkov</span></p>
                            <p>Born: <span class="font-bold">2003</span></p>
                        </div>
                        <div class="w-full mt-4 flex items-center flex-wrap gap-x-8 md:gap-x-24">
                            <h5>IMBG: <span class="font-bold">1408003460021</span></h5>
                        </div>
                        <div class="w-full mt-4 flex items-center flex-wrap gap-x-16 gap-y-6">
                            <p class="flex items-center gap-x-4">Driving Licence: <span class="font-bold"><x-akar-check
                                        width="20px" class="color-success"/></span></p>
                            <p class="flex items-center gap-x-4">Gun Licence: <span class="font-bold"><x-akar-check
                                        width="20px" class="color-success"/></span></p>
                            <p class="flex items-center gap-x-4">Elite Coin: <span class="font-bold"><x-akar-check
                                        width="20px" class="color-success"/></span></p>
                        </div>
                        <div class="w-full mt-4">
                            <h6 class="font-bold italic">Actions:</h6>
                            <div class="mt-3 flex flex-wrap items-center gap-x-16 gap-y-6">
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-success hoverable">Hire</button>
                                </form>
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-opposite">Ignore</button>
                                </form>
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-danger">Report</button>
                                </form>
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-outline-info hoverable">Message
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="shadow-2xl rounded-2xl shadow-main p-8 w-full lg:max-w-[40%]">
                        <div class="flex items-center gap-x-8 md:gap-x-24">
                            <h4 class="font-bold"><span class="italic">ID:</span> <span class="color-main">11</span>
                            </h4>
                            <p class="flex items-center"><span class="mr-4">Status:</span>
                                <x-akar-double-sword width="20px"/>
                                <span class="font-bold">Elite</span>
                                <x-akar-double-sword width="20px"/>
                            </p>
                        </div>
                        <div class="w-full mt-4 flex items-center flex-wrap gap-x-16 gap-y-6">
                            <p>First Name: <span class="font-bold">Stole</span></p>
                            <p>Father Name: <span class="font-bold">Mitko</span></p>
                            <p>Last Name: <span class="font-bold">Krshkov</span></p>
                            <p>Born: <span class="font-bold">2003</span></p>
                        </div>
                        <div class="w-full mt-4 flex items-center flex-wrap gap-x-8 md:gap-x-24">
                            <h5>IMBG: <span class="font-bold">1408003460021</span></h5>
                        </div>
                        <div class="w-full mt-4 flex items-center flex-wrap gap-x-16 gap-y-6">
                            <p class="flex items-center gap-x-4">Driving Licence: <span class="font-bold"><x-akar-check
                                        width="20px" class="color-success"/></span></p>
                            <p class="flex items-center gap-x-4">Gun Licence: <span class="font-bold"><x-akar-check
                                        width="20px" class="color-success"/></span></p>
                            <p class="flex items-center gap-x-4">Elite Coin: <span class="font-bold"><x-akar-check
                                        width="20px" class="color-success"/></span></p>
                        </div>
                        <div class="w-full mt-4">
                            <h6 class="font-bold italic">Actions:</h6>
                            <div class="mt-3 flex flex-wrap items-center gap-x-16 gap-y-6">
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-success hoverable">Hire</button>
                                </form>
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-opposite">Ignore</button>
                                </form>
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-danger">Report</button>
                                </form>
                                <form {{--action="#" method="POST"--}}>
                                    @csrf
                                    @method('POST')
                                    <button type="{{--submit--}}button" class="btn-outline-info hoverable">Message
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- Tabs --}}
    <div class="py-10 w-full">
        <h3 class="text-center">Tabs:</h3>
        <div class="mt-10">
            <div class="mt-12 tab-group-main">
                <div class="tab-header">
                    <button data-tab="1" class="tab-on tab-active">Tab 1</button>
                    <button data-tab="2" class="tab-on">Tab 2</button>
                    <button data-tab="3" class="tab-on">Tab 3</button>
                </div>
                <div class="tab-body" data-tab="1">
                    <p>Stole Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet deleniti
                        dolor
                        et,
                        facilis illo ipsa molestiae obcaecati officiis optio perferendis provident quas quibusdam
                        reiciendis tempore? Eius modi perferendis possimus!Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam
                        aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        rept amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam,
                        aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. voluptatem.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.</p>
                    <img class="mt-5" src="{{ url("https://fakeimg.pl/600x400/000000/C93030") }}" alt="Test Image">
                </div>
                <div class="tab-body hidden" data-tab="2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet deleniti dolor et,
                        facilis illo ipsa molestiae obcaecati officiis optio perferendis provident quas quibusdam
                        reiciendis tempore? Eius modi perferendis possimus!Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat.</p>
                    <p>Mole Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam
                        aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        rept amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam,
                        aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. voluptatem.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.</p>
                    <img class="mt-5" src="{{ url("https://fakeimg.pl/600x400/000000/C93030") }}" alt="Test Image">
                </div>
                <div class="tab-body hidden" data-tab="3">
                    <p>Kole Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet deleniti
                        dolor
                        et,
                        facilis illo ipsa molestiae obcaecati officiis optio perferendis provident quas quibusdam
                        reiciendis tempore? Eius modi perferendis possimus!Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam
                        aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        rept amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam,
                        aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. voluptatem.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.</p>
                    <img class="mt-5" src="{{ url("https://fakeimg.pl/600x400/000000/C93030") }}" alt="Test Image">
                </div>
                <div class="tab-footer">
                    <small class="font-bold">This is the static footer of the tabs</small>
                </div>
            </div>
            <div class="mt-12 tab-group-success">
                <div class="tab-header">
                    <button data-tab="1" class="tab-on tab-active">Tab 1</button>
                    <button data-tab="2" class="tab-on">Tab 2</button>
                    <button data-tab="3" class="tab-on">Tab 3</button>
                </div>
                <div class="tab-body" data-tab="1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet deleniti dolor et,
                        facilis illo ipsa molestiae obcaecati officiis optio perferendis provident quas quibusdam
                        reiciendis tempore? Eius modi perferendis possimus!Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam
                        aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        rept amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam,
                        aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. voluptatem.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.</p>
                    <img class="mt-5" src="{{ url("https://fakeimg.pl/600x400/000000/C93030") }}" alt="Test Image">
                </div>
                <div class="tab-body hidden" data-tab="2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet deleniti dolor et,
                        facilis illo ipsa molestiae obcaecati officiis optio perferendis provident quas quibusdam
                        reiciendis tempore? Eius modi perferendis possimus!Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam
                        aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        rept amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam,
                        aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. voluptatem.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.</p>
                    <img class="mt-5" src="{{ url("https://fakeimg.pl/600x400/000000/C93030") }}" alt="Test Image">
                </div>
                <div class="tab-body hidden" data-tab="3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet deleniti dolor et,
                        facilis illo ipsa molestiae obcaecati officiis optio perferendis provident quas quibusdam
                        reiciendis tempore? Eius modi perferendis possimus!Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam
                        aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        rept amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam,
                        aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. voluptatem.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.</p>
                    <img class="mt-5" src="{{ url("https://fakeimg.pl/600x400/000000/C93030") }}" alt="Test Image">
                </div>
            </div>
            <div class="mt-12 tab-group-danger">
                <div class="tab-header">
                    <button data-tab="1" class="tab-on  tab-active">Tab 1</button>
                    <button data-tab="2" class="tab-on">Tab 2</button>
                    <button data-tab="3" class="tab-on">Tab 3</button>
                </div>
                <div class="tab-body" data-tab="1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet deleniti dolor et,
                        facilis illo ipsa molestiae obcaecati officiis optio perferendis provident quas quibusdam
                        reiciendis tempore? Eius modi perferendis possimus!Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam
                        aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        rept amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam,
                        aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. voluptatem.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.</p>
                    <img class="mt-5" src="{{ url("https://fakeimg.pl/600x400/000000/C93030") }}" alt="Test Image">
                </div>
                <div class="tab-body hidden" data-tab="2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet deleniti dolor et,
                        facilis illo ipsa molestiae obcaecati officiis optio perferendis provident quas quibusdam
                        reiciendis tempore? Eius modi perferendis possimus!Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam
                        aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        rept amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam,
                        aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. voluptatem.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.</p>
                    <img class="mt-5" src="{{ url("https://fakeimg.pl/600x400/000000/C93030") }}" alt="Test Image">
                </div>
                <div class="tab-body hidden" data-tab="3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet deleniti dolor et,
                        facilis illo ipsa molestiae obcaecati officiis optio perferendis provident quas quibusdam
                        reiciendis tempore? Eius modi perferendis possimus!Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam
                        aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        rept amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam,
                        aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. voluptatem.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.</p>
                    <img class="mt-5" src="{{ url("https://fakeimg.pl/600x400/000000/C93030") }}" alt="Test Image">
                </div>
            </div>
            <div class="mt-12 tab-group-warning">
                <div class="tab-header">
                    <button data-tab="1" class="tab-on tab-active">Tab 1</button>
                    <button data-tab="2" class="tab-on">Tab 2</button>
                    <button data-tab="3" class="tab-on">Tab 3</button>
                </div>
                <div class="tab-body" data-tab="1">
                    <h3>Exemple Title for Tab</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet deleniti dolor et,
                        facilis illo ipsa molestiae obcaecati officiis optio perferendis provident quas quibusdam
                        reiciendis tempore? Eius modi perferendis possimus!Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam
                        aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        rept amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam,
                        aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. voluptatem.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.</p>
                    <img class="mt-5" src="{{ url("https://fakeimg.pl/600x400/000000/C93030") }}" alt="Test Image">
                </div>
                <div class="tab-body hidden" data-tab="2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet deleniti dolor et,
                        facilis illo ipsa molestiae obcaecati officiis optio perferendis provident quas quibusdam
                        reiciendis tempore? Eius modi perferendis possimus!Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam
                        aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        rept amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam,
                        aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. voluptatem.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.</p>
                    <img class="mt-5" src="{{ url("https://fakeimg.pl/600x400/000000/C93030") }}" alt="Test Image">
                </div>
                <div class="tab-body hidden" data-tab="3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet deleniti dolor et,
                        facilis illo ipsa molestiae obcaecati officiis optio perferendis provident quas quibusdam
                        reiciendis tempore? Eius modi perferendis possimus!Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam
                        aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        rept amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam,
                        aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. voluptatem.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.</p>
                    <img class="mt-5" src="{{ url("https://fakeimg.pl/600x400/000000/C93030") }}" alt="Test Image">
                </div>
                <div class="tab-footer">
                    <small class="font-bold">This is the static footer of the tabs</small>
                </div>
            </div>
            <div class="mt-12 tab-group-info">
                <div class="tab-header">
                    <button data-tab="1" class="tab-on tab-active">Tab 1</button>
                    <button data-tab="2" class="tab-on">Tab 2</button>
                    <button data-tab="3" class="tab-on">Tab 3</button>
                </div>
                <div class="tab-body" data-tab="1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet deleniti dolor et,
                        facilis illo ipsa molestiae obcaecati officiis optio perferendis provident quas quibusdam
                        reiciendis tempore? Eius modi perferendis possimus!Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam
                        aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        rept amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam,
                        aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. voluptatem.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.</p>
                    <img class="mt-5" src="{{ url("https://fakeimg.pl/600x400/000000/C93030") }}" alt="Test Image">
                </div>
                <div class="tab-body hidden" data-tab="2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet deleniti dolor et,
                        facilis illo ipsa molestiae obcaecati officiis optio perferendis provident quas quibusdam
                        reiciendis tempore? Eius modi perferendis possimus!Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam
                        aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        rept amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam,
                        aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. voluptatem.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.</p>
                    <img class="mt-5" src="{{ url("https://fakeimg.pl/600x400/000000/C93030") }}" alt="Test Image">
                </div>
                <div class="tab-body hidden" data-tab="3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet deleniti dolor et,
                        facilis illo ipsa molestiae obcaecati officiis optio perferendis provident quas quibusdam
                        reiciendis tempore? Eius modi perferendis possimus!Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam
                        aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        rept amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam,
                        aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. voluptatem.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.</p>
                    <img class="mt-5" src="{{ url("https://fakeimg.pl/600x400/000000/C93030") }}" alt="Test Image">
                </div>
            </div>
            <div class="mt-12 tab-group-light">
                <div class="tab-header">
                    <button data-tab="1" class="tab-on tab-active">Tab 1</button>
                    <button data-tab="2" class="tab-on">Tab 2</button>
                    <button data-tab="3" class="tab-on">Tab 3</button>
                </div>
                <div class="tab-body" data-tab="1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet deleniti dolor et,
                        facilis illo ipsa molestiae obcaecati officiis optio perferendis provident quas quibusdam
                        reiciendis tempore? Eius modi perferendis possimus!Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam
                        aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        rept amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam,
                        aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. voluptatem.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.</p>
                    <img class="mt-5" src="{{ url("https://fakeimg.pl/600x400/000000/C93030") }}" alt="Test Image">
                </div>
                <div class="tab-body hidden" data-tab="2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet deleniti dolor et,
                        facilis illo ipsa molestiae obcaecati officiis optio perferendis provident quas quibusdam
                        reiciendis tempore? Eius modi perferendis possimus!Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam
                        aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        rept amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam,
                        aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. voluptatem.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.</p>
                    <img class="mt-5" src="{{ url("https://fakeimg.pl/600x400/000000/C93030") }}" alt="Test Image">
                </div>
                <div class="tab-body hidden" data-tab="3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet deleniti dolor et,
                        facilis illo ipsa molestiae obcaecati officiis optio perferendis provident quas quibusdam
                        reiciendis tempore? Eius modi perferendis possimus!Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam
                        aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        rept amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam,
                        aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. voluptatem.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.</p>
                    <img class="mt-5" src="{{ url("https://fakeimg.pl/600x400/000000/C93030") }}" alt="Test Image">
                </div>
            </div>
            <div class="mt-12 tab-group-opposite">
                <div class="tab-header">
                    <button data-tab="1" class="tab-on tab-active">Tab 1</button>
                    <button data-tab="2" class="tab-on">Tab 2</button>
                    <button data-tab="3" class="tab-on">Tab 3</button>
                </div>
                <div class="tab-body" data-tab="1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet deleniti dolor et,
                        facilis illo ipsa molestiae obcaecati officiis optio perferendis provident quas quibusdam
                        reiciendis tempore? Eius modi perferendis possimus!Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam
                        aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        rept amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam,
                        aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. voluptatem.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.</p>
                    <img class="mt-5" src="{{ url("https://fakeimg.pl/600x400/000000/C93030") }}" alt="Test Image">
                </div>
                <div class="tab-body hidden" data-tab="2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet deleniti dolor et,
                        facilis illo ipsa molestiae obcaecati officiis optio perferendis provident quas quibusdam
                        reiciendis tempore? Eius modi perferendis possimus!Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam
                        aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        rept amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam,
                        aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. voluptatem.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.</p>
                    <img class="mt-5" src="{{ url("https://fakeimg.pl/600x400/000000/C93030") }}" alt="Test Image">
                </div>
                <div class="tab-body hidden" data-tab="3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet deleniti dolor et,
                        facilis illo ipsa molestiae obcaecati officiis optio perferendis provident quas quibusdam
                        reiciendis tempore? Eius modi perferendis possimus!Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. A
                        aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam
                        aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        rept amet, consectetur adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam,
                        aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem. voluptatem.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. A aliquam, aliquid, aperiam aspernatur
                        assumenda cupiditate eius et eveniet excepturi harum in iste minima neque nihil, pariatur
                        repellat repudiandae ut voluptatem.</p>
                    <img class="mt-5" src="{{ url("https://fakeimg.pl/600x400/000000/C93030") }}" alt="Test Image">
                </div>
                <div class="tab-footer">
                    <small class="font-bold">This is the static footer of the tabs</small>
                </div>
            </div>
        </div>
    </div>

    {{-- Accordion --}}
    <div class="py-10 w-full">
        <h3 class="text-center lg:text-left">Accordion:</h3>
        <div class="mt-10">
            <div class="accordion-group-main">
                <button class="hoverable accordion-on">Section 1</button>
                <div class="accordion-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consectetur iure iusto quas qui
                        sapiente soluta? Accusamus at distinctio ipsum? Adipisci dolor error id nihil officia
                        provident
                        rem suscipit unde!</p>
                </div>
            </div>
            <div class="accordion-group-success">
                <button class="hoverable accordion-on">Section 1</button>
                <div class="accordion-body hidden">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consectetur iure iusto quas qui
                        sapiente soluta? Accusamus at distinctio ipsum? Adipisci dolor error id nihil officia
                        provident
                        rem suscipit unde!</p>
                </div>
            </div>
            <div class="accordion-group-danger">
                <button class="hoverable accordion-on">Section 1</button>
                <div class="accordion-body hidden">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consectetur iure iusto quas qui
                        sapiente soluta? Accusamus at distinctio ipsum? Adipisci dolor error id nihil officia
                        provident
                        rem suscipit unde!</p>
                </div>
            </div>
            <div class="accordion-group-warning">
                <button class="hoverable accordion-on">Section 1</button>
                <div class="accordion-body hidden">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consectetur iure iusto quas qui
                        sapiente soluta? Accusamus at distinctio ipsum? Adipisci dolor error id nihil officia
                        provident
                        rem suscipit unde!</p>
                </div>
            </div>
            <div class="accordion-group-info">
                <button class="hoverable accordion-on">Section 1</button>
                <div class="accordion-body hidden">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consectetur iure iusto quas qui
                        sapiente soluta? Accusamus at distinctio ipsum? Adipisci dolor error id nihil officia
                        provident
                        rem suscipit unde!</p>
                </div>
            </div>
            <div class="accordion-group-light">
                <button class="hoverable accordion-on">Section 1</button>
                <div class="accordion-body hidden">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consectetur iure iusto quas qui
                        sapiente soluta? Accusamus at distinctio ipsum? Adipisci dolor error id nihil officia
                        provident
                        rem suscipit unde!</p>
                </div>
            </div>
            <div class="accordion-group-opposite">
                <button class="hoverable accordion-on">Section 1</button>
                <div class="accordion-body hidden">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab consectetur iure iusto quas qui
                        sapiente soluta? Accusamus at distinctio ipsum? Adipisci dolor error id nihil officia
                        provident
                        rem suscipit unde!</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Progress Bars --}}
    <div class="py-10 w-full mt-14">
        <h3 class="text-center">Progress Bars:</h3>
        <div class="mt-10 flex justify-center">
            <div class="input-group">
                <label for="file">Downloading progress:</label>
                <progress id="file" value="45" max="100"> 45%</progress>
            </div>
        </div>
    </div>

    {{-- Tooltips --}}
    <div class="py-10 w-full">
        <h3 class="text-center">Tooltips:</h3>
        <div class="mt-10 flex flex-wrap justify-center gap-4">
            <button class="hoverable btn-main tooltip">Hover!
                <span class="tooltip-text main">Tooltip text help text whats going on</span>
            </button>
            <button class="hoverable btn-success tooltip">Hover!
                <span class="tooltip-text success">Tooltip text help text whats going on</span>
            </button>
            <button class="hoverable btn-danger tooltip">Hover!
                <span class="tooltip-text danger">Tooltip text help text whats going on</span>
            </button>
            <button class="hoverable btn-warning tooltip">Hover!
                <span class="tooltip-text warning">Tooltip text help text whats going on</span>
            </button>
            <button class="hoverable btn-info tooltip">Hover!
                <span class="tooltip-text info">Tooltip text help text whats going on</span>
            </button>
            <button class="hoverable btn-light tooltip">Hover!
                <span class="tooltip-text light">Tooltip text help text whats going on</span>
            </button>
            <button class="hoverable btn-opposite tooltip">Hover!
                <span class="tooltip-text opposite">Tooltip text help text whats going on</span>
            </button>
        </div>
    </div>

    {{-- Loader/Spinner --}}
    <div class="pt-10 w-full flex flex-col items-center justify-center">
        <h3>Loader/Spinner:</h3>
        <a href="https://cssloaders.github.io/" target="_blank" class="font-bold">For more open this.</a>
        <div class="my-10 {{--pl-16--}}">
            <span class="loader"></span>
        </div>
    </div>

    {{-- Basic Animations --}}
    <div class="py-10 w-full">
        <h3 class="text-center">Basic Animations:</h3>
        <small class="block text-center italic {{--ml-5--}}">Hover the buttons to see the animation!</small>
        <div class="p-10 flex justify-around w-full">
            <div class="flex flex-wrap justify-center">
                <button class="m-2 block btn-main hover:anim_fadeIn ">Fade In</button>
                <button class="m-2 block btn-success hover:anim_fadeOut">Fade Out</button>
                <button class="m-2 block btn-danger hover:anim_fadeInOut">Fade In and Out</button>
                <button class="m-2 block btn-warning hover:anim_scaleUp">Scale Up</button>
                <button class="m-2 block btn-info hover:anim_scaleDown">Scale Down</button>
                <button class="m-2 block btn-light hover:anim_wingLeft">Wing Left</button>
                <button class="m-2 block btn-opposite hover:anim_wingRight">Wing Right</button>
                <button class="m-2 block btn-outline-opposite hover:anim_powerUp">Power Up</button>
                <button class="m-2 block btn-outline-main hover:anim_streetRotor">Street Rotor</button>
                <button class="m-2 block btn-outline-success hover:anim_moveUp">Move Up</button>
                <button class="m-2 block btn-outline-danger hover:anim_moveDown">Move Down</button>
                <button class="m-2 block btn-outline-warning hover:anim_moveLeft">Move Left</button>
                <button class="m-2 block btn-outline-info hover:anim_moveRight">Move Right</button>
                <button class="m-2 block btn-outline-light hover:anim_flowerRotor">Flower Rotor</button>
            </div>
        </div>
    </div>
@endsection
