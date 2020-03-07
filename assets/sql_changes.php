ALTER TABLE `ip`.`doctors`   
  ADD COLUMN `review_visit_fee` DECIMAL(10,2) NULL AFTER `c_fee`,
  ADD COLUMN `report_visit_fee` DECIMAL(10,2) NULL AFTER `review_visit_fee`,
  ADD COLUMN `infertility_fee` DECIMAL(10,2) NULL AFTER `report_visit_fee`;
