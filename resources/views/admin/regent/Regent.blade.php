<script>
    class Attorney extends BaseClass {
        no_set = [];

        before(form) {
            this.image = {};
        }

        after(form) {

        }

        get image() {
            return this._image;
        }

        set image(value) {
            this._image = new Image(value, this);
        }

        get submit_data() {
            let data = {
                full_name: this.full_name,
                email: this.email,
                address: this.address,
                phone_number: this.phone_number,
                date_of_birth: this.date_of_birth,
                sex: this.sex,
                facebook: this.facebook,
                skype: this.skype,
                twitter: this.twitter,
                show_home_page: this.show_home_page,
                career_titles: this.career_titles,
                intro: this.intro,
            }

            data = jsonToFormData(data);
            let image = $(`#${this.image.element_id}`).get(0).files[0];
            if (image) data.append('image', image);

            return data;
        }
    }
</script>
