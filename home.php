<?php include 'utils/header.php'; ?>


<div class="container mx-auto flex flex-col items-center">
    <h1 class="text-center text-2xl font-bold text-black">
        Add User with his Role
    </h1>
    <form action="/oop/users.php" method="POST" class="flex flex-col mt-5 gap-2">
        <div class="flex flex-col gap-2">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Write your name..." class="outline-none border p-2 w-[350px] "/>
        </div>
        <div class="flex flex-col gap-2">
            <label for="age">Age</label>
            <input type="text" name="age" id="age" placeholder="Write your age..." class="outline-none border p-2 w-[350px]">
        </div>
        <div class="flex flex-col gap-2">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Write your email..." class="outline-none border p-2 w-[350px]">
        </div>
        <div class="flex flex-col gap-2">
            <label for="role">Role</label>
            <input type="text" name="role" id="role" placeholder="Write your role..." class="outline-none border p-2 w-[350px]">
        </div>
        <div class="mt-5">
            <input class="bg-black text-white px-5 py-2 font-bold" type="submit" name="submit" value="post" />
        </div>
    </form>
</div>


<?php include 'utils/footer.php'; ?>