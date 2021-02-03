# php-module-02

### lession-07
```
 Clean Code
    - Giúp công việc cộng tác nhóm.
    - Dễ hiểu code hơn, đơn giản dễ đọc.
    - Dễ thay đổi, bảo trì, cải tiến.
    - Trực tiếp giải quyết vấn đề.
    - Không có code trùng lặp.
    - Thể hiện được ý tưởng về thiết kế.

(*) Các cách thực hành clean code
    - Đặt tên biến có nghĩa: danh từ (meaningful name)
    - Đặt tên phương thức: động từ.
    - Đặt tên đọc được: Không viết tắt, không được là bài văn, tránh ký tự gây nhầm lẫn. Ví dụ 0 và O, I và 1.
    - Đặt tên Pascal case, camel case, snake case
    - Review code
        + 1 methods không được quá 25 dòng code.
        + Tuân thủ được SOLID (5 nguyên lý trong lập trình hướng đối tượng).
        + Tuân thủ được DRY (Don't repeat yourself)

(*) - SOLID

Refactoring
    - Teachnical debut
    - Tại sao: Code khoa học hơn. Vẫn giữ được giá trị code. Dễ đọc, dễ tiếp cận.

Coding convention


```

### lession-06
```
1. What? Why, When, How
    - Abstract class là gì? Là 1 class.
    - Interface là một "bản thiết kế - cho các methods".

    (*) Tại sao phải dùng abstract class, nó giống và khác class thường ở chỗ nào?
    (*) Tại sao?
        - Abstract class định nghĩa các methods, properties giống nhau bản chất.
        - Interface định nghĩa các methods tên giống nhau, khác nhau về bản chất.

        Abstract và Interface đều định nghĩa các phương thức và bắt lớp con khi kế thừa hoặc implement phải thực thi.
    (*) Tại sao phải dùng?

```


### lession-05

```
> Lý thuyết
    >> - static, self, this
    >> - extends

> Bài tập quan trọng
    >> 5. try/catch
    what, why, how, when
    what: xử lý ngoại lệ, lỗi mà không lường trước: khi các lỗi về nghiệp vụ, lỗi khi tích hợp các hệ thống với nhau, lỗi internet, lỗi do chập điện, lỗi do chuột cắn, lỗi do tắt nhầm server.
    why:
    when:
    how: 
        - cú pháp:
            try {
                // code xử lý nghiệp vụ
                // xoá đơn hàng
                    1. Xoá thông tin trong bảng đơn hàng
                    2. Xoá thông tin trong bảng chi tiết đơn hàng
                    3. Cộng lại số lượng sản phẩm trong kho.
            } catch (Exception ex) {
                    1. Lưu thông tin lỗi ở đâu để khắc phục
                    2. Rollback tất cả các thao tác.
            } finaly {
                    ~ default.
            }

> Bài tâp về nhà
    >> 1. Tìm hiểu từ khoá final
    >> 2. Overried và overrload
    >> 3. Tìm hiểu constructor, có thể khai báo nhiều constructor trong 1 class được không? Giải thích.
    >> 4. Khi nào thì lớp cha không cho phép lớp con kế thừa các thuộc tính và phương thức.
    

> Chuẩn bị bài mới
    >> 1. So sánh abstract class và interface.
        - Tạo bảng so sánh
        - Cần có code demo của bài thực hành trước khi học giờ lý thuyết và phản tư để trao đổi.
    >> 2. Tìm hiểu về Strategy Pattern
        + Design partern là gì?
        + Strategy Pattern là gì?
        + Khi nào dùng Strategy Pattern?
    >> 3. Đọc bài http://thaotrinh.info/autoload-classes-lam-viec-voi-composer-trong-php-nhu-the-nao-phan-1/
    >> 4. Đọc bài và làm
         https://james.codegym.vn/mod/assign/view.php?id=6308


```
