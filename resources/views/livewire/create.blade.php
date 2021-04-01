<div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      <!--
        Background overlay, show/hide based on modal state.
  
        Entering: "ease-out duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
  
      <!-- This element is to trick the browser into centering the modal contents. -->
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
  
      <!--
        Modal panel, show/hide based on modal state.
  
        Entering: "ease-out duration-300"
          From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          To: "opacity-100 translate-y-0 sm:scale-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100 translate-y-0 sm:scale-100"
          To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      -->
      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
        <form>
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                  <div>
                      <h1 class="font-bold text-center">Create</h1>
                  </div>
                  <div>
                    <div class="mb-2">
                        <input wire:model="studentId" type="hidden" class="shadow appearance-none border rounded w-full py-2 px-3">
                      </div>
                      <div class="mb-2">
                        <label for="nis" class="block">NIS</label>
                        <input wire:model="nis" type="text" name="nis" id="nis" class="shadow appearance-none border rounded w-full py-2 px-3" placeholder="NIS">
                      </div>
                      <div class="mb-2">
                        <label for="nama" class="block">Nama</label>
                        <input wire:model="nama" type="text" name="nama" id="nama" class="shadow appearance-none border rounded w-full py-2 px-3" placeholder="Nama">
                      </div>
                      <div class="mb-2">
                        <label for="jk" class="block">jk</label>
                        <input wire:model="jk" type="text" name="jk" id="jk" class="shadow appearance-none border rounded w-full py-2 px-3" placeholder="jk">
                      </div>
                      <div class="mb-2">
                        <label for="temp_lahir" class="block">temp_lahir</label>
                        <input wire:model="temp_lahir" type="text" name="temp_lahir" id="temp_lahir" class="shadow appearance-none border rounded w-full py-2 px-3" placeholder="temp_lahir">
                      </div>
                      <div class="mb-2">
                        <label for="tgl_lahir" class="block">tgl_lahir</label>
                        <input wire:model="tgl_lahir" type="date" name="tgl_lahir" id="tgl_lahir" class="shadow appearance-none border rounded w-full py-2 px-3" placeholder="tgl_lahir">
                      </div>
                      <div class="mb-2">
                        <label for="alamat" class="block">alamat</label>
                        <input wire:model="alamat" type="text" name="alamat" id="alamat" class="shadow appearance-none border rounded w-full py-2 px-3" placeholder="alamat">
                      </div>
                      <div class="mb-2">
                        <label for="asal_sekolah" class="block">asal_sekolah</label>
                        <input wire:model="asal_sekolah" type="text" name="asal_sekolah" id="asal_sekolah" class="shadow appearance-none border rounded w-full py-2 px-3" placeholder="asal_sekolah">
                      </div>
                      <div class="mb-2">
                        <label for="kelas" class="block">kelas</label>
                        <input wire:model="kelas" type="text" name="kelas" id="kelas" class="shadow appearance-none border rounded w-full py-2 px-3" placeholder="kelas">
                      </div>
                      <div class="mb-2">
                        <label for="jurusan" class="block">jurusan</label>
                        <input wire:model="jurusan" type="text" name="jurusan" id="jurusan" class="shadow appearance-none border rounded w-full py-2 px-3" placeholder="jurusan">
                      </div>
                  </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
          <button wire:click.prevent="store()" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm">
            Submit
          </button>
          <button wire:click="hideModal()" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
            Cancel
          </button>
        </div>
        </form>
      </div>
    </div>
  </div>